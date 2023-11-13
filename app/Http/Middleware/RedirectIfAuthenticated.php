<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Mengambil informasi pengguna yang diotentikasi
                $user = Auth::guard($guard)->user();

                // Menyimpan level pengguna ke dalam variabel
                $userLevel = $user->status; // Gantilah 'level' sesuai dengan atribut yang menyimpan level pengguna

                // Melakukan pengecekan level admin atau user
                if ($userLevel == 'admin') {
                    return redirect('/admin'); // Gantilah '/admin-home' sesuai dengan rute admin
                } elseif ($userLevel == 'pengguna') {
                    return redirect('index'); // Gantilah '/user-home' sesuai dengan rute user
                } else {
                    // Jika tidak ada level, redirect ke halaman login
                    return redirect('login'); // Gantilah '/login' sesuai dengan rute login
                }
            }
        }

        return $next($request);
    }
}
