<x-app-layout>
    <x-slot name="header">
        Manajemen Program Pembangunan
    </x-slot>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden" id="tabel-data">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <h3 class="font-bold text-gray-700 text-sm">Daftar Program</h3>
            
            <div class="flex items-center space-x-4">
                <form action="{{ route('admin.program.index') }}" method="GET" class="flex items-center border border-gray-300 rounded-lg overflow-hidden bg-white">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari program..." class="px-3 py-1.5 text-sm border-none focus:ring-0 w-48">
                    <button type="submit" class="px-3 py-1.5 bg-gray-100 text-gray-500 hover:bg-gray-200">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </form>

                <a href="{{ route('admin.program.create') }}" class="inline-flex items-center px-4 py-2 bg-islamic-green text-white text-[10px] font-bold uppercase tracking-widest rounded-lg hover:bg-[#0a382c] transition shadow-sm">
                    <i class="fa-solid fa-plus mr-2"></i> Tambah Program
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 text-gray-500 text-[10px] uppercase tracking-widest border-b">
                    <tr>
                        <th class="py-4 px-6 font-bold">Program</th>
                        <th class="py-4 px-6 font-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach($programs as $program)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 font-medium text-gray-900">{{ $program->title }}</td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('admin.program.edit', $program->id) }}" class="inline-flex items-center justify-center w-9 h-9 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition shadow-sm" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                
                                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" onsubmit="confirmDelete(event, this)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center justify-center w-9 h-9 bg-red-50 text-red-600 rounded-lg hover:bg-red-600 hover:text-white transition shadow-sm" title="Hapus">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6 px-6 pb-6 flex justify-end">
                {{ $programs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>