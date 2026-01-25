@extends('layouts.app')

@section('content')
<div class="container-fluid text-center py-4">
    <h3 class="fw-bold mb-3 text-primary">Arsitektur Sistem Informasi PKBM</h3>
    <p class="text-muted mb-4">Gambaran umum struktur aplikasi yang digunakan dalam Sistem Informasi PKBM.</p>

    <div class="card shadow-sm border-0 mx-auto" style="max-width: 900px;">
        <div class="card-body p-4">
            <img src="{{ asset('images/Sistem-Informasi-PKBM.png') }}" 
                 alt="Diagram Arsitektur Sistem Informasi PKBM" 
                 class="img-fluid rounded-3 border"
                 style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-primary px-4 py-2">
            <i class="bi bi-speedometer2 me-2"></i> Ke Dashboard
        </a>
    </div>
</div>

<style>
    h3 {
        letter-spacing: 0.5px;
    }

    img {
        transition: transform 0.3s ease;
    }

    img:hover {
        transform: scale(1.02);
    }

    .btn-primary {
        background-color: #0d47a1;
        border: none;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background-color: #1565c0;
    }
</style>
@endsection
