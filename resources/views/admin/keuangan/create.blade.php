<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-gray-700">&larr; Dashboard</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Catat Pemasukan / Pengeluaran Baru</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.keuangan.store') }}" method="POST">
                        @csrf 
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Tanggal Transaksi</label>
                                <input type="date" name="date" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required value="{{ date('Y-m-d') }}">
                            </div>
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Jenis Arus Kas</label>
                                <select name="type" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required>
                                    <option value="pemasukan">Pemasukan (Masuk)</option>
                                    <option value="pengeluaran">Pengeluaran (Keluar)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Kategori (Pilih atau Ketik Sendiri)</label>
                                <input type="text" name="category" list="kategori-list" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" placeholder="Contoh: Donasi, Operasional..." required>
                                <datalist id="kategori-list">
                                    <option value="Donasi Umum">
                                    <option value="Sumbangan Barang">
                                    <option value="Iuran Bulanan">
                                    <option value="Operasional Masjid">
                                    <option value="Pembangunan">
                                </datalist>
                            </div>
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Wujud / Detail (Teks Fleksibel)</label>
                                <input type="text" name="item_details" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" placeholder="Contoh: Uang Tunai, atau 50 Buah Al-Quran" required>
                            </div>
                        </div>

                        <div class="mb-6 bg-emerald-50 p-4 rounded-lg border border-emerald-100">
                            <label class="block font-bold text-sm text-emerald-800 mb-2">Nominal Uang (Wajib Angka)</label>
                            <p class="text-xs text-emerald-600 mb-2">Tulis tanpa titik. Jika sumbangan murni berupa barang (tidak ada uang masuk kas), cukup ketik angka 0.</p>
                            <div class="flex items-center">
                                <span class="bg-gray-200 px-4 py-2 border border-gray-300 rounded-l-md font-bold text-gray-600">Rp</span>
                                <input type="number" name="amount" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-r-md shadow-sm" placeholder="500000" value="0" required min="0">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Keterangan Tambahan / Nama Penyumbang</label>
                            <textarea name="description" rows="3" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" placeholder="Dari Hamba Allah, atau Pembayaran listrik bulan ini..."></textarea>
                        </div>

                        <div class="flex justify-end border-t pt-4">
                            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-6 rounded shadow transition">
                                Simpan Transaksi
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>