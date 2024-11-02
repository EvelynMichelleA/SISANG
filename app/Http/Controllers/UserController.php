<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User diimport
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua data pengguna dan relasi role
        $user = User::with('role')->get();
        $search = $request->input('search');
        $query = $search; // Define $query here

        // Query the 'menu' table for items that start with the search term
        $user = User::when($search, function ($query, $search) {
            return $query->where('nama_pengguna', 'like', $search . '%');
        })->paginate(10);

        // Kirim data pengguna ke view
        return view('user.index', compact('user'));
    }
}