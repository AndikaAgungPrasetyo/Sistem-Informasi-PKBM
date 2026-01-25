@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('arsitektur') }}" class="btn btn-primary">
            <i class="bi bi-diagram-3 me-1"></i> Lihat Arsitektur Sistem
        </a>
    </div>

    {{-- Isi dashboard kamu di bawah ini --}}
    
</div>
<div class="container-fluid">
    {{-- Judul Halaman --}}
    <h3 class="fw-bold mb-4 text-center">
        Selamat Datang di Sistem Informasi PKBM, Admin
    </h3>

    {{-- =======================
        BAGIAN PENGGUNA
    ======================== --}}
    <h5 class="mb-3 text-secondary">Pengguna</h5>
    <div class="row g-4 mb-5">
        <div class="col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <i class="bi bi-person-gear display-5 text-primary"></i>
                <h6 class="mt-3 fw-semibold">Admin</h6>
            </div>
        </div>

        <div class="col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <i class="bi bi-person-badge display-5 text-success"></i>
                <h6 class="mt-3 fw-semibold">Tutor</h6>
            </div>
        </div>

        <div class="col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <i class="bi bi-person display-5 text-warning"></i>
                <h6 class="mt-3 fw-semibold">Siswa</h6>
            </div>
        </div>
    </div>

    {{-- =======================
        BAGIAN FITUR SISTEM
    ======================== --}}
    <h5 class="mb-3 text-secondary">Fitur Sistem</h5>

    @php
        $cards = [
            ['icon' => 'bi-people-fill', 'color' => '#1976d2', 'title' => 'Manajemen Data Siswa'],
            ['icon' => 'bi-person-workspace', 'color' => '#2e7d32', 'title' => 'Manajemen Data Tutor'],
            ['icon' => 'bi-book', 'color' => '#fbc02d', 'title' => 'Manajemen Pembelajaran'],
            ['icon' => 'bi-clipboard-check', 'color' => '#e53935', 'title' => 'Manajemen Penilaian'],
            ['icon' => 'bi-calendar-check', 'color' => '#0288d1', 'title' => 'Absensi'],
            ['icon' => 'bi-megaphone', 'color' => '#6d4c41', 'title' => 'Pengumuman Kegiatan'],
            ['icon' => 'bi-bar-chart-line', 'color' => '#1a237e', 'title' => 'Laporan & Statistik'],
        ];
    @endphp

    <div class="row">
        @foreach ($cards as $card)
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow-sm border-0"
                     style="cursor: pointer; transition: all 0.3s;">
                    <div class="card-body py-4">
                        <i class="bi {{ $card['icon'] }}"
                           style="font-size: 2.2rem; color: {{ $card['color'] }};"></i>
                        <h6 class="fw-semibold mt-3">{{ $card['title'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- =======================
    STYLE TAMBAHAN
======================= --}}
<style>
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
