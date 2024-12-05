<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Tambahkan ini

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Log pertama untuk memastikan middleware dijalankan
        Log::info('RoleMiddleware is triggered');

        if (!$user) {
            // Log jika tidak ada pengguna yang terotentikasi
            Log::info('No authenticated user found.');
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Log kedua untuk melihat role yang dimiliki user dan yang dibutuhkan
        $userRoles = $user->roles->pluck('nama_role')->toArray();
        Log::info('User roles:', $userRoles);
        Log::info('Required roles for access:', $roles);

        // Berikan akses penuh jika pengguna adalah Superadmin
        if (in_array('Superadmin', $userRoles)) {
            Log::info('Access granted for Superadmin.');
            return $next($request);
        }

        // Cek jika user memiliki salah satu role yang diperbolehkan
        if (array_intersect($userRoles, $roles)) {
            Log::info('Access granted based on role');
            return $next($request);
        }

        // Jika role tidak sesuai, arahkan ke dashboard atau tampilkan pesan error
        Log::info('Access denied: user does not have required role');
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
