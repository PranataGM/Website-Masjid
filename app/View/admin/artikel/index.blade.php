<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Artikel & Kajian') }}
            </h2>
            <a href="{{ route('admin.artikel.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded shadow">
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 border-b-2 border-gray-200">
                                <th class="p-4 font-bold text-gray-600 uppercase text-sm">No</th>
                                <th class="p-4 font-bold text-gray-600 uppercase text-sm">Judul Artikel / Kajian</th>
                                <th class="p-4 font-bold text-gray-600 uppercase text-sm">Tanggal Dibuat</th>
                                <th class="p-4 font-bold text-gray-600 uppercase text-sm">Status</th>
                                <th class="p-4 font-bold text-gray-600 uppercase text-sm text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Looping Data Artikel dari Database --}}
                            @forelse ($articles as $index => $article)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="p-4 text-gray-700">{{ $index + 1 }}</td>
                                    <td class="p-4 text-gray-900 font-semibold">{{ $article->title }}</td>
                                    <td class="p-4 text-gray-500 text-sm">{{ $article->created_at->format('d M Y') }}</td>
                                    <td class="p-4">
                                        @if($article->is_published)
                                            <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full">Tayang</span>
                                        @else
                                            <span class="bg-gray-100 text-gray-800 text-xs font-bold px-3 py-1 rounded-full">Draft</span>
                                        @endif
                                    </td>
                                    <td class="p-4 text-center space-x-2">
                                        <a href="#" class="inline-block bg-blue-100 text-blue-700 hover:bg-blue-200 font-bold px-3 py-1 rounded text-sm transition">
                                            Edit
                                        </a>
                                        <form action="#" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                            <button type="submit" class="bg-red-100 text-red-700 hover:bg-red-200 font-bold px-3 py-1 rounded text-sm transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-6 text-center text-gray-500">
                                        Belum ada artikel atau kajian yang dibuat.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>