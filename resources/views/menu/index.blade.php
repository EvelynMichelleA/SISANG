<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Menu</title>
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

        /* Styling Content */
        .content {
            margin-left: 270px;
            padding: 20px;
            position: relative;
            background-color: #DEEFFE;
        }

        .content h1 {
            font-size: 28px;
            font-weight: bold;
            color: #1e3a8a;
            display: inline-block;
        }

        .add-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #3b82f6;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Search Form */
        .search-form {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
        }

        .search-form input[type="text"] {
            padding: 12px;
            width: 100%;
            max-width: 1200px;
            border: 2px solid #000000;
            border-radius: 25px;
            padding-left: 45px;
            font-size: 16px;
            background-image: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/svgs/solid/search.svg');
            background-size: 20px;
            background-position: 15px center;
            background-repeat: no-repeat;
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

        .action-icons a {
            color: #1e3a8a;
            margin: 0 5px;
            font-size: 18px;
            text-decoration: none;
        }

        .action-icons a:hover {
            color: #3b82f6;
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
            <li><a href="/pengeluaran"><i class="fas fa-wallet"></i> Kelola Pengeluaran</a></li>
            <li><a href="/menu" class="active"><i class="fas fa-utensils"></i> Kelola Menu</a></li>
            <li><a href="/pelanggan"><i class="fas fa-user-friends"></i> Kelola Pelanggan</a></li>
            <li><a href="/laporan-transaksi"><i class="fas fa-file-alt"></i> Laporan Transaksi Penjualan</a></li>
            <li><a href="/laporan-pengeluaran"><i class="fas fa-file-invoice"></i> Laporan Pengeluaran</a></li>
            <li><a href="/logout"><i class="fas fa-power-off"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Menu</h1>
        <a href="#" class="add-button">TAMBAH</a>

        <!-- Search Form -->
        <form action="{{ url('/menu') }}" method="GET" class="search-form" id="searchForm">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari ..."
                id="searchInput">
        </form>

        <!-- Menu Table -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Gambar</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menu as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_menu }}</td>
                        <td>
                            @if ($item->gambar_menu)
                                <img src="{{ asset($item->gambar_menu) }}" alt="Gambar Menu" width="50">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>{{ $item->jenis_menu }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="action-icons">
                            <a href="/menu/{{ $item->id_menu }}/edit"><i class="fas fa-edit"></i></a>
                            <a href="/menu/{{ $item->id_menu }}"><i class="fas fa-eye"></i></a>
                            <a href="/menu/{{ $item->id_menu }}/delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Tidak ada menu yang ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        // Debounce function to limit the rate at which a function can fire
        function debounce(func, delay) {
            let timeoutId;
            return function(...args) {
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }
                timeoutId = setTimeout(() => {
                    func.apply(this, args);
                }, delay);
            };
        }

        // JavaScript for real-time search with debounce
        const searchInput = document.getElementById('searchInput');
        const searchForm = document.getElementById('searchForm');

        searchInput.addEventListener('keyup', debounce(function() {
            searchForm.submit();
        }, 500)); // Adjust the delay time (500 milliseconds) as needed
    </script>
</body>

</html>
