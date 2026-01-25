@extends('layouts.auth')

@section('title', 'Atur Ulang Password')

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="mb-3">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $email ?? '') }}" required autofocus>
    </div>

    <div class="mb-3">
        <label for="password">Kata Sandi Baru</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit">Simpan Password Baru</button>

    <div class="small-text">
        Kembali ke halaman <a href="{{ route('login') }}">Login</a>
    </div>
</form>
@endsection
