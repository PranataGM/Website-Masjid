<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    public function index()
    {
        return view('donasi');
    }

    public function process(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:10000', // Minimal donasi Rp 10.000
            'program' => 'required|string',
        ]);

        // 1. Buat Order ID Unik
        $orderId = 'ZISWAF-' . time() . '-' . Str::random(5);

        // 2. Simpan ke Database (Status masih Pending)
        $donation = Donation::create([
            'order_id' => $orderId,
            'name' => $request->name,
            'program' => $request->program,
            'amount' => $request->amount,
            'status' => 'pending',
        ]);

        // 3. Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // 4. Siapkan Data untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $request->amount,
            ],
            'customer_details' => [
                'first_name' => $request->name,
            ],
            'item_details' => [
                [
                    'id' => 'DONASI-01',
                    'price' => $request->amount,
                    'quantity' => 1,
                    'name' => 'Donasi: ' . $request->program,
                ]
            ]
        ];

        // 5. Dapatkan Snap Token dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        // Simpan token ke database
        $donation->update(['snap_token' => $snapToken]);

        // 6. Kembalikan token ke halaman donasi
        return view('donasi', compact('snapToken', 'donation'));
    }
    public function callback(Request $request)
    {
        // 1. Verifikasi Keamanan (Pastikan pesan benar-benar dari Midtrans)
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        
        if ($hashed == $request->signature_key) {
            // 2. Cari data donasi berdasarkan Order ID
            $donation = Donation::where('order_id', $request->order_id)->first();
            
            if ($donation) {
                // 3. Jika Status Pembayaran SUKSES (Settlement / Capture)
                if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                    
                    // Hindari pencatatan ganda jika Midtrans mengirim pesan 2 kali
                    if ($donation->status != 'success') {
                        $donation->update(['status' => 'success']);
                        
                        // 4. OTOMATIS CATAT KE LAPORAN KEUANGAN MASJID!
                        \App\Models\CashFlow::create([
                            'date' => now(),
                            'type' => 'pemasukan',
                            'category' => 'Donasi Online / ZISWAF',
                            'item_details' => 'Donasi: ' . $donation->program . ' (dari ' . $donation->name . ')',
                            'amount' => $donation->amount,
                        ]);
                    }

                } 
                // Jika Donasi Gagal / Batal / Kedaluwarsa
                elseif ($request->transaction_status == 'deny' || $request->transaction_status == 'cancel' || $request->transaction_status == 'expire') {
                    $donation->update(['status' => 'failed']);
                }
            }
        }
        
        // Balas pesan ke Midtrans bahwa kita sudah menerimanya
        return response()->json(['message' => 'Notifikasi Diterima']);
    }
}