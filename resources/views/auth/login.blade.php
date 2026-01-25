@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    {{-- Alert Error --}}
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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
            autofocus
        >

        <label for="password">Kata Sandi</label>
        <input 
            type="password"
            id="password"
            name="password"
            minlength="6"
            autocomplete="current-password"
            required
        >

        <button type="submit">Masuk</button>

        <div class="small-text">
            Belum punya akun?
            <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
    </form>

@endsection
