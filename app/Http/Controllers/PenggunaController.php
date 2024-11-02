<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User diimport
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dan relasi role
        $pengguna = User::with('role')->get();

        // Kirim data pengguna ke view
        return view('pengguna.index', compact('pengguna'));
    }
}
