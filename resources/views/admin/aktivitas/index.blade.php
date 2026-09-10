<x-app-layout>
    <x-slot name="header">
        Log Aktivitas Sistem
    </x-slot>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden" id="tabel-data">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <h3 class="font-bold text-gray-700 text-sm">Aktivitas Terbaru</h3>
            
            <div class="flex items-center space-x-4">
                <form action="{{ route('admin.aktivitas.index') }}" method="GET" class="flex items-center border border-gray-300 rounded-lg overflow-hidden bg-white">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari log..." class="px-3 py-1.5 text-sm border-none focus:ring-0 w-48">
                    <button type="submit" class="px-3 py-1.5 bg-gray-100 text-gray-500 hover:bg-gray-200">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 text-gray-500 text-[10px] uppercase tracking-widest border-b">
                    <tr>
                        <th class="py-4 px-6 font-bold">Waktu</th>
                        <th class="py-4 px-6 font-bold">Aksi</th>
                        <th class="py-4 px-6 font-bold">Deskripsi</th>
                        <th class="py-4 px-6 font-bold">User (ID)</th>
                        <th class="py-4 px-6 font-bold">IP & Agent</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @forelse($logs as $log)
                    <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition text-xs md:text-sm">
                        <td class="py-4 px-6 text-gray-500 whitespace-nowrap">{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        <td class="py-4 px-6 font-bold text-gray-800">
                            <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded text-xs">{{ $log->action }}</span>
                        </td>
                        <td class="py-4 px-6 text-gray-600">{{ $log->description }}</td>
                        <td class="py-4 px-6 text-gray-500">{{ $log->user_id ?? 'Sistem' }}</td>
                        <td class="py-4 px-6 text-gray-400 text-[10px] max-w-xs truncate" title="{{ $log->user_agent }}">
                            {{ $log->ip_address }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-500">Belum ada aktivitas.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-6 px-6 pb-6 flex justify-end">
                {{ $logs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
