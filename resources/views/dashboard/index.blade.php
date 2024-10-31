<html>
 <head>
  <title>
   Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-1/4 bg-blue-800 text-white h-screen p-5">
    <div class="text-3xl font-bold mb-10" style="font-family: 'Comic Sans MS', sans-serif;">
        SANGUKU
      </div>
    <ul>
     <li class="mb-4">
      <a class="flex items-center p-2 bg-blue-600 rounded" href="#">
       <i class="fas fa-home mr-3">
       </i>
       Beranda
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-users mr-3">
       </i>
       Kelola Pengguna
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-exchange-alt mr-3">
       </i>
       Kelola Transaksi Penjualan
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-wallet mr-3">
       </i>
       Kelola Pengeluaran
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-utensils mr-3">
       </i>
       Kelola Menu
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-user-friends mr-3">
       </i>
       Kelola Pelanggan
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-file-alt mr-3">
       </i>
       Laporan Transaksi Penjualan
      </a>
     </li>
     <li class="mb-4">
      <a class="flex items-center p-2" href="#">
       <i class="fas fa-file-invoice-dollar mr-3">
       </i>
       Laporan Pengeluaran
      </a>
     </li>
    </ul>
    <div class="mt-auto">
     <a class="flex items-center p-2" href="#">
      <i class="fas fa-power-off mr-3">
      </i>
      Logout
     </a>
    </div>
   </div>
   <!-- Main Content -->
   <div class="w-3/4 p-10">
    <div class="flex items-center justify-between mb-10">
     <div class="text-2xl font-bold">
      Beranda
     </div>
     <i class="fas fa-bars text-2xl">
     </i>
    </div>
    <div class="bg-blue-100 p-5 rounded-lg">
     <div class="text-2xl font-bold mb-5">
      Selamat Datang, User!
     </div>
     <div class="grid grid-cols-3 gap-4 mb-10">
      <div class="bg-white p-5 rounded-lg shadow flex items-center">
       <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
        <i class="fas fa-users text-2xl">
        </i>
       </div>
       <div>
        <div class="text-gray-500">
         Pelanggan
        </div>
        <div class="text-2xl font-bold">
         2
        </div>
       </div>
      </div>
      <div class="bg-white p-5 rounded-lg shadow flex items-center">
       <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
        <i class="fas fa-clipboard-list text-2xl">
        </i>
       </div>
       <div>
        <div class="text-gray-500">
         Pendapatan
        </div>
        <div class="text-2xl font-bold">
         4
        </div>
       </div>
      </div>
      <div class="bg-white p-5 rounded-lg shadow flex items-center">
       <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
        <i class="fas fa-shopping-cart text-2xl">
        </i>
       </div>
       <div>
        <div class="text-gray-500">
         Transaksi
        </div>
        <div class="text-2xl font-bold">
         4
        </div>
       </div>
      </div>
     </div>
     <div class="bg-white p-5 rounded-lg shadow">
      <div class="text-xl font-bold mb-5">
       Penjualan Bulan Ini
      </div>
      <img alt="Bar chart showing sales data for the current month" height="400" src="https://storage.googleapis.com/a1aa/image/XkOVfE7tSWRVa61CucZJky2BDPK8o5mf5fNNOPs8nkKVjrYnA.jpg" width="600"/>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>