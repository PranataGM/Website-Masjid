<x-app-layout>
    <x-slot name="header">
        Overview Dashboard
    </x-slot>

    <div class="mb-8">
        <p class="text-gray-500 font-medium mb-1">Assalamu'alaikum,</p>
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Selamat datang, {{ Auth::user()->name ?? 'Pengurus' }}!</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mb-10">
        
        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 relative overflow-hidden group hover:shadow-xl transition duration-300">
            <div class="absolute -right-6 -top-6 text-emerald-50 opacity-50 group-hover:scale-110 group-hover:-rotate-12 transition duration-500">
                <i class="fa-solid fa-wallet text-[150px]"></i>
            </div>
            <div class="relative z-10">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-inner">
                    <i class="fa-solid fa-rupiah-sign"></i>
                </div>
                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">Total Saldo Kas</p>
                <div class="text-4xl font-extrabold text-gray-900 font-serif mb-2">Rp {{ number_format($totalSaldo ?? 0, 0, ',', '.') }}</div>
                <p class="text-xs text-emerald-600 font-bold bg-emerald-50 inline-block px-3 py-1 rounded-full"><i class="fa-solid fa-arrow-trend-up mr-1"></i> Data Keuangan Real-time</p>
            </div>
        </div>
        
        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 relative overflow-hidden group hover:shadow-xl transition duration-300">
            <div class="absolute -right-6 -top-6 text-blue-50 opacity-50 group-hover:scale-110 group-hover:-rotate-12 transition duration-500">
                <i class="fa-solid fa-file-lines text-[150px]"></i>
            </div>
            <div class="relative z-10">
                <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-inner">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">Publikasi & Kajian</p>
                <div class="flex items-baseline mb-2">
                    <div class="text-4xl font-extrabold text-gray-900 font-serif">{{ $totalArtikel ?? 0 }}</div>
                    <span class="text-lg font-medium text-gray-500 ml-2">Postingan</span>
                </div>
                <p class="text-xs text-blue-600 font-bold bg-blue-50 inline-block px-3 py-1 rounded-full"><i class="fa-solid fa-check-circle mr-1"></i> Tersedia untuk Jamaah</p>
            </div>
        </div>

    </div>

    <!-- Chart Section -->
    <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 mb-10">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-900 font-serif"><i class="fa-solid fa-chart-line text-islamic-gold mr-2"></i> Grafik Arus Kas</h2>
            <div class="flex space-x-2 mt-4 md:mt-0">
                <button onclick="updateChart('harian')" id="btn-harian" class="px-4 py-2 text-sm font-medium rounded-lg bg-emerald-600 text-white transition">Harian</button>
                <button onclick="updateChart('mingguan')" id="btn-mingguan" class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200 transition">Mingguan</button>
                <button onclick="updateChart('tahunan')" id="btn-tahunan" class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200 transition">Tahunan</button>
            </div>
        </div>
        <div class="relative h-[300px] w-full">
            <canvas id="financeChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartData = @json($chartData);
        let myChart = null;

        function renderChart(labels, incomeData, expenseData, title) {
            const ctx = document.getElementById('financeChart').getContext('2d');
            if (myChart) myChart.destroy();
            
            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Pemasukan',
                            data: incomeData,
                            backgroundColor: 'rgba(16, 185, 129, 0.8)',
                            borderRadius: 4
                        },
                        {
                            label: 'Pengeluaran',
                            data: expenseData,
                            backgroundColor: 'rgba(239, 68, 68, 0.8)',
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { 
                            beginAtZero: true,
                            ticks: { callback: function(value) { return 'Rp ' + value.toLocaleString('id-ID'); } }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': Rp ' + context.raw.toLocaleString('id-ID');
                                }
                            }
                        }
                    }
                }
            });
        }

        function updateChart(type) {
            // Update button styles
            ['harian', 'mingguan', 'tahunan'].forEach(t => {
                const btn = document.getElementById('btn-' + t);
                if (t === type) {
                    btn.classList.add('bg-emerald-600', 'text-white');
                    btn.classList.remove('bg-gray-100', 'text-gray-600');
                } else {
                    btn.classList.remove('bg-emerald-600', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-600');
                }
            });

            const data = chartData[type];
            let labels = [];
            
            if (type === 'harian') labels = data.map(d => d.date);
            if (type === 'mingguan') labels = data.map(d => 'Minggu ' + d.week);
            if (type === 'tahunan') labels = data.map(d => d.year);

            const income = data.map(d => d.income);
            const expense = data.map(d => d.expense);

            renderChart(labels, income, expense, type);
        }

        // Initialize with daily data
        document.addEventListener('DOMContentLoaded', () => {
            if(chartData.harian && chartData.harian.length > 0) {
                updateChart('harian');
            }
        });
    </script>

    <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="bg-gray-50/50 border-b border-gray-100 py-5 px-8 flex justify-between items-center">
            <h2 class="font-bold text-gray-800 text-lg"><i class="fa-solid fa-bolt text-islamic-gold mr-2"></i> Akses Cepat Manajemen</h2>
        </div>
        
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <a href="{{ route('admin.artikel.index') }}" class="block p-6 bg-white border border-gray-200 rounded-2xl hover:border-emerald-500 hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center text-xl mb-4 group-hover:bg-emerald-500 group-hover:text-white transition">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Kelola Artikel</h3>
                    <p class="text-sm text-gray-500">Tulis jadwal kajian baru atau edit informasi kegiatan masjid.</p>
                </a>
                
                <a href="{{ route('admin.keuangan.index') }}" class="block p-6 bg-white border border-gray-200 rounded-2xl hover:border-blue-500 hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center text-xl mb-4 group-hover:bg-blue-500 group-hover:text-white transition">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Buku Besar</h3>
                    <p class="text-sm text-gray-500">Catat pemasukan infaq dan biaya operasional secara presisi.</p>
                </a>
                
                <a href="{{ route('admin.program.index') }}" class="block p-6 bg-white border border-gray-200 rounded-2xl hover:border-yellow-500 hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                    <div class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-full flex items-center justify-center text-xl mb-4 group-hover:bg-yellow-500 group-hover:text-white transition">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Update Program</h3>
                    <p class="text-sm text-gray-500">Laporkan progres pembangunan fasilitas kepada para jamaah.</p>
                </a>
                
            </div>
        </div>
    </div>

</x-app-layout>