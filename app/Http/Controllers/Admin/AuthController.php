<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show the admin login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle admin login attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Check if user exists and has admin role
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Check if user is admin (you can add a role field or check email domain)
            if ($this->isAdmin($user)) {
                Auth::login($user);
                return redirect()->intended('/admin/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials or insufficient permissions.',
        ])->withInput($request->only('email'));
    }

    /**
     * Check if user is admin.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    private function isAdmin(User $user)
    {
        // For now, check if email ends with @admin.com or you can add a role column
        return str_ends_with($user->email, '@admin.com') || $user->email === 'admin@example.com';
    }

    /**
     * Logout the admin user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}