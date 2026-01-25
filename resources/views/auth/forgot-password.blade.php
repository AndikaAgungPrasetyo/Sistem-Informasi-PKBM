@extends('layouts.auth')

@section('title', 'Lupa Password')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <p class="text-muted mb-4" style="font-size: 0.9rem;">
        Masukkan email Anda, kami akan mengirimkan tautan untuk mengatur ulang kata sandi.
    </p>

    <div class="mb-3">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <button type="submit">Kirim Tautan Reset</button>

    <div class="small-text">
        Kembali ke halaman <a href="{{ route('login') }}">Login</a>
    </div>
</form>
@endsection
    