<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek dulu apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        // Cek role user
        if (Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Untuk request AJAX/API, return status 403
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Anda tidak memiliki akses untuk operasi ini.'], 403);
        }

        // Redirect dengan pesan error
        return redirect()->route('books.index')
            ->with('error', 'Anda tidak memiliki akses untuk halaman ini.');
    }
}