<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi Penjualan</title>
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
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1e3a8a;
            color: #fff;
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
            <li><a href="/dashboard"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="/pengguna"><i class="fas fa-users"></i> Kelola Pengguna</a></li>
            <li><a href="/transaksi-penjualan" class="active"><i class="fas fa-exchange-alt"></i> Kelola Transaksi Penjualan</a></li>
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
        <h1>Data Transaksi Penjualan</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Pengguna</th>
                    <th>Total Biaya</th>
                    <th>Tanggal Transaksi</th>
                    <th>Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $trans)
                    <tr>
                        <td>{{ $trans->id_transaksi_penjualan }}</td>
                        <td>{{ $trans->pelanggan->nama_pelanggan }}</td>
                        <td>{{ $trans->pengguna->username }}</td>
                        <td>{{ number_format($trans->total_biaya, 2) }}</td>
                        <td>{{ $trans->tanggal_transaksi }}</td>
                        <td>{{ $trans->metode_pembayaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
