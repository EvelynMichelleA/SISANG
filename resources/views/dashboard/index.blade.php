<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SANGUKU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styling Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1e3a8a;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px 0;
            overflow-y: auto;
        }

        .sidebar-header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Comic Sans MS';
            color: #ffffff;
            margin-bottom: 30px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .sidebar-menu a i {
            margin-right: 10px;
        }

        .sidebar-menu a.active,
        .sidebar-menu a:hover {
            background-color: #3b82f6;
        }

        /* Styling Content */
        .content {
            margin-left: 270px;
            padding: 20px;
            background-color: #DEEFFE;
        }

        .header {
            font-size: 28px;
            font-weight: bold;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .card {
            flex: 1;
            min-width: 200px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .card-icon {
            background-color: #3b82f6;
            color: #fff;
            padding: 15px;
            border-radius: 50%;
            font-size: 24px;
            margin-right: 15px;
        }

        .card-content {
            color: #333;
        }

        .card-content h3 {
            font-size: 18px;
            margin: 0;
            color: #666;
        }

        .card-content p {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            color: #1e3a8a;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>SANGUKU</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="/dashboard" class="active"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="/pengguna"><i class="fas fa-users"></i> Kelola Pengguna</a></li>
            <li><a href="/transaksi-penjualan"><i class="fas fa-exchange-alt"></i> Kelola Transaksi Penjualan</a></li>
            <li><a href="/pengeluaran"><i class="fas fa-wallet"></i> Kelola Pengeluaran</a></li>
            <li><a href="/menu"><i class="fas fa-utensils"></i> Kelola Menu</a></li>
            <li><a href="/pelanggan"><i class="fas fa-user-friends"></i> Kelola Pelanggan</a></li>
            <li><a href="/laporan-transaksi"><i class="fas fa-file-alt"></i> Laporan Transaksi Penjualan</a></li>
            <li><a href="/laporan-pengeluaran"><i class="fas fa-file-invoice"></i> Laporan Pengeluaran</a></li>
            <li><a href="/logout"><i class="fas fa-power-off"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="header">Dashboard</div>

        <!-- Card Container -->
        <div class="card-container">
            <div class="card">
                <div class="card-icon"><i class="fas fa-users"></i></div>
                <div class="card-content">
                    <h3>Pelanggan</h3>
                    <p>250</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-clipboard-list"></i></div>
                <div class="card-content">
                    <h3>Pendapatan</h3>
                    <p>Rp 15,000,000</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-shopping-cart"></i></div>
                <div class="card-content">
                    <h3>Transaksi</h3>
                    <p>340</p>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="header mt-8">Penjualan Bulan Ini</div>
        <div>
            <img src="https://storage.googleapis.com/a1aa/image/XkOVfE7tSWRVa61CucZJky2BDPK8o5mf5fNNOPs8nkKVjrYnA.jpg"
                alt="Sales Chart" width="100%" style="border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        </div>
    </div>
</body>

</html>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    