<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>SANGUKU</h2>
            <ul>
                <li><a href="/dashboard">Beranda</a></li>
                <li><a href="#">Kelola Pengguna</a></li>
                <li><a href="#">Kelola Transaksi Penjualan</a></li>
                <!-- More menu items -->
            </ul>
        </div>
        <div class="content">
            <h1>Selamat Datang, User!</h1>
            <div class="cards">
                <div class="card">
                    <h3>Pelanggan</h3>
                    <p>{{ $customers }}</p>
                </div>
                <div class="card">
                    <h3>Pendapatan</h3>
                    <p>{{ $income }}</p>
                </div>
                <div class="card">
                    <h3>Transaksi</h3>
                    <p>{{ $transactions }}</p>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Initialize the Chart.js chart
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($salesData->toArray())) !!},
                datasets: [{
                    label: 'Penjualan Bulan Ini',
                    data: {!! json_encode(array_values($salesData->toArray())) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
