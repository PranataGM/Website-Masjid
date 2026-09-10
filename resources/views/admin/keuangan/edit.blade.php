<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.keuangan.index') }}" class="text-gray-500 hover:text-gray-700">&larr; Kembali</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Transaksi</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.keuangan.update', $cashflow->id) }}" method="POST">
                        @csrf 
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Tanggal Transaksi</label>
                                <input type="date" name="date" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required value="{{ $cashflow->date }}">
                            </div>
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Jenis Arus Kas</label>
                                <select name="type" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required>
                                    <option value="pemasukan" {{ $cashflow->type == 'pemasukan' ? 'selected' : '' }}>Pemasukan (Masuk)</option>
                                    <option value="pengeluaran" {{ $cashflow->type == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran (Keluar)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Kategori</label>
                                <input type="text" name="category" list="kategori-list" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" value="{{ $cashflow->category }}" required>
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
                                <input type="text" name="item_details" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" value="{{ $cashflow->item_details }}" required>
                            </div>
                        </div>

                        <div class="mb-6 bg-emerald-50 p-4 rounded-lg border border-emerald-100">
                            <label class="block font-bold text-sm text-emerald-800 mb-2">Nominal Uang (Wajib Angka)</label>
                            <div class="flex items-center">
                                <span class="bg-gray-200 px-4 py-2 border border-gray-300 rounded-l-md font-bold text-gray-600">Rp</span>
                                <input type="number" name="amount" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-r-md shadow-sm" value="{{ $cashflow->amount }}" required min="0">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Keterangan Tambahan / Nama Penyumbang</label>
                            <textarea name="description" rows="3" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm">{{ $cashflow->description }}</textarea>
                        </div>

                        <div class="flex justify-end border-t pt-4">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow transition">
                                Update Transaksi
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>