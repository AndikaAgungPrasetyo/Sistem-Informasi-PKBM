<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses login user.
     */
    public function login(Request $request)
    {
        // Validasi input agar aman
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // ambil email + password
        $credentials = $request->only('email', 'password');

        // cek kredensial
        if (Auth::attempt($credentials)) {

            // amankan sesi (mencegah session hijacking)
            $request->session()->regenerate();

            return redirect()->intended('/arsitektur');
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->withInput();
    }

    /**
     * Tampilkan halaman registrasi.
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Proses registrasi user baru.
     */
    public function register(Request $request)
    {
        // Validasi untuk mencegah SQL Injection & input buruk
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Buat user baru (Eloquent = aman dari SQL Injection)
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah registrasi
        Auth::login($user);

        return redirect()->intended('/arsitektur');
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus sesi & amankan CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Anda telah logout.');
    }
}
