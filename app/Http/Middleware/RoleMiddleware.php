<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Cek apakah pengguna memiliki role yang diizinkan
        if ($user && in_array($user->role->nama_role, $roles)) {
            return $next($request);
        }

        // Jika pengguna tidak memiliki akses, arahkan ke halaman dashboard atau tampilkan pesan error
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
