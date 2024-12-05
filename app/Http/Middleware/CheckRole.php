<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        
        // Cek apakah role user ada dalam daftar roles yang diperbolehkan
        if (in_array($user->role->nama_role, $roles)) {
            return $next($request);
        }

        // Redirect jika role tidak cocok
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
