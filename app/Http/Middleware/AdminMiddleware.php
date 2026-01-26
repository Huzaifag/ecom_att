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
        if (!Auth::check()) {
            return redirect('/admin/login');
        }

        // Check if user is admin
        $user = Auth::user();
        if (!$this->isAdmin($user)) {
            Auth::logout();
            return redirect('/admin/login')->withErrors(['access' => 'Access denied. Admin privileges required.']);
        }

        return $next($request);
    }

    /**
     * Check if user is admin.
     *
     * @param  mixed  $user
     * @return bool
     */
    private function isAdmin($user)
    {
        if (!$user) {
            return false;
        }

        // For now, check if email ends with @admin.com or specific admin emails
        return str_ends_with($user->email, '@admin.com') ||
               $user->email === 'admin@example.com' ||
               $user->email === 'admin@admin.com';
    }
}