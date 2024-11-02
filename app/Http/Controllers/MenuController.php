<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Pastikan Anda telah membuat model Menu

class MenuController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel 'menu'
        $menu = Menu::all();

        // Mengirim data 'menu' ke view 'menu.index'
        return view('menu.index', compact('menu'));
    }
}
