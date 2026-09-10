<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.artikel.index') }}" class="text-gray-500 hover:text-gray-700">
                &larr; Kembali
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tambah Artikel / Pengumuman Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.artikel.store') }}" method="POST">
                        @csrf <div class="mb-6">
                            <label for="title" class="block font-medium text-sm text-gray-700 mb-2">Judul Pengumuman / Kajian</label>
                            <input type="text" name="title" id="title" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" placeholder="Misal: Kajian Fiqih Ahad Pagi" required>
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block font-medium text-sm text-gray-700 mb-2">Isi Lengkap</label>
                            <textarea name="content" id="content" rows="6" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" placeholder="Tuliskan detail pengumuman atau ringkasan kajian di sini..." required></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="is_published" value="1" class="rounded border-gray-300 text-emerald-600 shadow-sm focus:ring-emerald-500" checked>
                                <span class="ml-2 text-sm text-gray-600">Langsung tayangkan di halaman depan</span>
                            </label>
                        </div>

                        <div class="flex justify-end border-t pt-4">
                            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-6 rounded shadow transition">
                                Simpan Pengumuman
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>