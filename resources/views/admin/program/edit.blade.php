<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.program.index') }}" class="text-gray-500 hover:text-gray-700">&larr; Kembali</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Program: {{ $program->title }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT') <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Nama Program / Pembangunan</label>
                            <input type="text" name="title" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" value="{{ $program->title }}" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Update Foto Progres (Opsional)</label>
                                @if($program->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $program->image) }}" class="h-24 object-cover rounded shadow-sm border border-gray-200">
                                    </div>
                                @endif
                                <input type="file" name="image" accept="image/*" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm p-2 bg-gray-50">
                                <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah foto.</p>
                            </div>
                            <div>
                                <label class="block font-medium text-sm text-gray-700 mb-2">Status Saat Ini</label>
                                <select name="status" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required>
                                    <option value="Berjalan" {{ $program->status == 'Berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                                    <option value="Selesai" {{ $program->status == 'Selesai' ? 'selected' : '' }}>Sudah Selesai</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Keterangan Tambahan</label>
                            <textarea name="description" rows="4" class="w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" required>{{ $program->description }}</textarea>
                        </div>

                        <div class="flex justify-end border-t pt-4">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow transition">
                                Update Program
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>