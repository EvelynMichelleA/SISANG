<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $pengguna = User::with('role')
            ->when($search, function ($query, $search) {
                $query->where('username', 'like', "%{$search}%");
            })
            ->get();
        return view('pengguna.index', compact('pengguna', 'search'));
    }
}
