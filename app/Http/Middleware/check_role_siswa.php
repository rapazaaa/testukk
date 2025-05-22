<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class check_role_siswa
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user->hasRole('siswa')) {
            // Kalau bukan siswa, arahkan ke halaman khusus
            return redirect()->route('not-authorized');
        }

        return $next($request);
    }
}
