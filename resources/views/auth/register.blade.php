@extends('layouts.auth')

@section('title', 'Registrasi')

@section('content')

    {{-- Error Alert --}}
    @if ($errors->any())
        <div 
            style="
                background:#ffe5e5;color:#c70000;padding:10px 15px;border-radius:8px;
                margin:10px auto 20px auto;font-size:14px;border:1px solid #ffb3b3;
                width:100%;text-align:center;max-width:350px;display:block;
            "
        >
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nama Lengkap</label>
        <input 
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >

        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
        >

        <label for="password">Kata Sandi</label>
        <input 
            type="password"
            id="password"
            name="password"
            minlength="6"
            autocomplete="new-password"
            required
        >

        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
        <input 
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            minlength="6"
            autocomplete="new-password"
            required
        >

        <button type="submit">Daftar</button>

        <div class="small-text">
            Sudah punya akun? 
            <a href="{{ route('login') }}">Masuk di sini</a>
        </div>
    </form>

@endsection
