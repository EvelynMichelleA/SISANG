<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function index()
    {
        Log::info('Halaman login ditampilkan');
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        Log::info('Memulai proses login');
        
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        
        $loginInput = $request->input('username');
        $fieldType = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        Log::info("Tipe input login: {$fieldType}");

        // Cari user berdasarkan input username atau email
        $user = User::where($fieldType, $loginInput)->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Log::info("Autentikasi berhasil untuk user: {$user->username}");
            Auth::login($user);

            // Cek apakah user sudah login dengan benar
            if (Auth::check()) {
                Log::info("User berhasil login, redirect ke dashboard.");
                return redirect()->route('dashboard'); // Pastikan route dashboard ada
            } else {
                Log::error("Auth::check() gagal setelah Auth::login()");
                return redirect()->route('login.page')->with('loginError', 'Gagal otentikasi, coba lagi.');
            }
        }

        Log::error("Autentikasi gagal untuk input: {$loginInput}");
        return redirect()->back()->with('loginError', 'Username/Email atau Password salah')->withInput();
    }

    // Proses logout
    public function logout(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            Log::info("User '{$user->username}' melakukan logout");
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.page'); // Mengarahkan ke halaman login setelah logout
    }
}
