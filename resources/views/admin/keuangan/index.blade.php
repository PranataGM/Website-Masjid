<x-app-layout>
    <x-slot name="header">
        Laporan Kas & Keuangan
    </x-slot>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden" id="tabel-data">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <h3 class="font-bold text-gray-700 text-sm">Arus Kas Masjid</h3>
            
            <div class="flex items-center space-x-4">
                <form action="{{ route('admin.keuangan.index') }}" method="GET" class="flex items-center border border-gray-300 rounded-lg overflow-hidden bg-white">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari keterangan..." class="px-3 py-1.5 text-sm border-none focus:ring-0 w-48">
                    <button type="submit" class="px-3 py-1.5 bg-gray-100 text-gray-500 hover:bg-gray-200">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </form>

                <form action="{{ route('admin.keuangan.import') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-2 border border-gray-300 rounded-lg p-1">
                    @csrf
                    <input type="file" name="file" accept=".csv" required class="text-xs w-48">
                    <button type="submit" class="px-2 py-1 bg-blue-600 text-white text-[10px] uppercase font-bold rounded-md hover:bg-blue-700">
                        <i class="fa-solid fa-upload mr-1"></i> Import CSV
                    </button>
                </form>

                <a href="{{ route('admin.keuangan.create') }}" class="inline-flex items-center px-4 py-2 bg-islamic-green text-white text-[10px] font-bold uppercase tracking-widest rounded-lg hover:bg-[#0a382c] transition shadow-sm">
                    <i class="fa-solid fa-plus mr-2"></i> Catat Transaksi
                </a>
            </div>
        </div>

        @php
            $getSortIcon = function($field) use ($sort, $dir) {
                if ($sort !== $field) return '<i class="fa-solid fa-sort text-gray-300 ml-1"></i>';
                return $dir === 'asc' ? '<i class="fa-solid fa-sort-up text-islamic-green ml-1"></i>' : '<i class="fa-solid fa-sort-down text-islamic-green ml-1"></i>';
            };
            $getSortUrl = function($field) use ($sort, $dir) {
                $newDir = ($sort === $field && $dir === 'asc') ? 'desc' : 'asc';
                return request()->fullUrlWithQuery(['sort' => $field, 'dir' => $newDir]) . '#tabel-data';
            };
        @endphp

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 text-gray-500 text-[10px] uppercase tracking-widest border-b">
                    <tr>
                        <th class="py-4 px-6 font-bold">
                            <a href="{{ $getSortUrl('date') }}" class="flex items-center hover:text-islamic-green">Tanggal {!! $getSortIcon('date') !!}</a>
                        </th>
                        <th class="py-4 px-6 font-bold">
                            <a href="{{ $getSortUrl('description') }}" class="flex items-center hover:text-islamic-green">Keterangan {!! $getSortIcon('description') !!}</a>
                        </th>
                        <th class="py-4 px-6 font-bold text-right">
                            <a href="{{ $getSortUrl('amount') }}" class="flex items-center justify-end hover:text-islamic-green">Nominal (Rp) {!! $getSortIcon('amount') !!}</a>
                        </th>
                        <th class="py-4 px-6 font-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach($transactions as $trans)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition text-xs md:text-sm">
                        <td class="py-4 px-6 text-gray-500">{{ $trans->created_at->format('d/m/y') }}</td>
                        <td class="py-4 px-6 font-bold text-gray-800">{{ $trans->description }}</td>
                        <td class="py-4 px-6 text-right font-extrabold {{ $trans->type == 'pemasukan' ? 'text-emerald-600' : 'text-red-600' }}">
                            {{ number_format($trans->amount, 0, ',', '.') }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('admin.keuangan.edit', $trans->id) }}" class="inline-flex items-center justify-center w-8 h-8 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition shadow-sm" title="Edit">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                </a>
                                
                                <form action="{{ route('admin.keuangan.destroy', $trans->id) }}" method="POST" onsubmit="confirmDelete(event, this)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center justify-center w-8 h-8 bg-red-50 text-red-600 rounded-lg hover:bg-red-600 hover:text-white transition shadow-sm" title="Hapus">
                                        <i class="fa-solid fa-trash-can text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6 px-6 pb-6 flex justify-end">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>