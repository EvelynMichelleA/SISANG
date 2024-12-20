<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengeluaran</title>
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

        /* Content Styling */
        .content {
            margin-left: 270px;
            padding: 20px;
            background-color: #DEEFFE;
        }

        h1 {
            color: #1e3a8a;
            text-align: left;
            font-size: 28px;
            font-weight: bold;
        }

        /* Add Button */
        .add-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #3b82f6;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
        }

        .add-button:hover {
            background-color: #2563eb;
        }

        /* Filter Section */
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-section input {
            padding: 10px;
            border: 2px solid #94a3b8;
            border-radius: 5px;
            font-size: 14px;
            width: 200px;
        }

        .filter-section button {
            padding: 10px 20px;
            background-color: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .filter-section button:hover {
            background-color: #2563eb;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            border: 5px solid #3b82f6;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1e3a8a;
            color: #fff;
            text-align: center;
        }

        td {
            text-align: center;
        }

        /* Action Icons */
        .action-icons a {
            margin: 0 5px;
            color: #1e3a8a;
            text-decoration: none;
        }

        .action-icons a:hover {
            color: #2563eb;
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
            <li><a href="/transaksi-penjualan"><i class="fas fa-exchange-alt"></i> Kelola Transaksi Penjualan</a></li>
            <li><a href="/pengeluaran" class="active"><i class="fas fa-wallet"></i> Kelola Pengeluaran</a></li>
            <li><a href="/menu"><i class="fas fa-utensils"></i> Kelola Menu</a></li>
            <li><a href="/pelanggan"><i class="fas fa-user-friends"></i> Kelola Pelanggan</a></li>
            <li><a href="/laporan-transaksi"><i class="fas fa-file-alt"></i> Laporan Transaksi Penjualan</a></li>
            <li><a href="/laporan-pengeluaran"><i class="fas fa-file-invoice"></i> Laporan Pengeluaran</a></li>
            <li><a href="/logout"><i class="fas fa-power-off"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Pengeluaran</h1>
        <a href="#" class="add-button">TAMBAH</a>

        <!-- Filter Section -->
        <div class="filter-section">
            <div>
                <input type="text" placeholder="DD/MM/YYYY">
                <input type="text" placeholder="DD/MM/YYYY">
                <button><i class="fas fa-filter" style="color: white;"></i></button>
            </div>
        </div>

        <!-- Pengeluaran Table -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengeluaran</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengeluaran as $item)
                    <tr>
                        <td>{{ $item->id_pengeluaran }}</td>
                        <td>{{ $item->nama_pengeluaran }}</td>
                        <td>Rp {{ number_format($item->total_pengeluaran, 0, ',', '.') }}</td>
                        <td>{{ $item->tanggal_pengeluaran }}</td>
                        <td class="action-icons">
                            <a href="/pengeluaran/{{ $item->id_pengeluaran }}/edit"><i class="fas fa-edit"></i></a>
                            <a href="/pengeluaran/{{ $item->id_pengeluaran }}"><i class="fas fa-eye"></i></a>
                            <a href="/pengeluaran/{{ $item->id_pengeluaran }}/delete"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
