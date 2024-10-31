<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     /**
//      * Handle an authentication attempt.
//      */
//     public function authenticate(Request $request): RedirectResponse
//     {
//         $credentials = $request->validate([
//             'username' => ['required', 'string'],
//             'password' => ['required', 'string'], // Pastikan field ini sesuai dengan input di form login
//         ]);

//         // Adjust credentials to match Laravel's default password field for authentication
//         if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
//             $request->session()->regenerate();

//             return redirect()->intended('dashboard'); // Pastikan rute ini ada
//         }

//         return back()->withErrors([
//             'username' => 'The provided credentials do not match our records.',
//         ])->onlyInput('username');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Corrected: Facades instead of Facedes

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([ // Corrected: $request instead of request
            'username' => 'required', // Removed ':dns' since it’s unnecessary here
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ])->onlyInput('username');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
