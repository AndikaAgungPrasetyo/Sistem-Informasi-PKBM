<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sistem Informasi PKBM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(180deg, #0d47a1 0%, #1565c0 100%);
            width: 240px;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            color: #fff;
        }

        .logo-section {
            text-align: center;
            padding: 18px 10px;
            border-bottom: 1px solid rgba(255,255,255,0.12);
        }
        .logo-section img { width: 60px; margin-bottom: 8px; }

        .user-section {
            text-align: left;
            padding: 12px 18px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            background: rgba(255,255,255,0.03);
        }
        .user-section h6 { margin: 0; font-weight: 600; color: #fff; }
        .user-section small { color: #e3f2fd; }

        .nav-area {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 8px;
        }

        .nav-link {
            color: #e3f2fd;
            font-weight: 500;
            transition: all 0.2s;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .nav-link i { font-size: 18px; margin-right: 10px; }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255,255,255,0.12);
            color: #fff;
        }

        .section-title {
            color: #bbdefb;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            margin: 12px 20px;
        }

        .logout-section {
            border-top: 1px solid rgba(255,255,255,0.08);
            padding: 12px 18px;
        }

        .logout-btn {
            background-color: #c62828;
            border: none;
            color: #fff;
            width: 100%;
            text-align: left;
            padding: 10px 12px;
            border-radius: 6px;
            font-weight: 600;
        }
        .logout-btn:hover { background-color: #b71c1c; }

        /* Main content */
        .content {
            margin-left: 240px;
            padding: 28px;
        }

        @media (max-width: 768px) {
            .sidebar { position: relative; width: 100%; height: auto; }
            .content { margin-left: 0; padding: 16px; }
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Logo -->
            <div class="logo-section">
                <img src="{{ asset('images/logo-pkbm.png') }}" alt="Logo PKBM">
                <div style="color:#fff; font-weight:700;">Sistem Informasi</div>
                <div style="color:#e3f2fd; font-size:0.85rem;">PKBM</div>
            </div>

            <!-- User info -->
            <div class="user-section">
                <h6>Halo, {{ Auth::user()->name ?? 'Pengguna' }}</h6>
                <small>Selamat datang</small>
            </div>

            <!-- Navigation -->
            <div class="nav-area">
                <nav class="nav flex-column mt-2">
                    {{-- URUTAN: Arsitektur dulu, lalu Dashboard --}}
                    <a href="{{ route('arsitektur') }}"
                       class="nav-link {{ request()->routeIs('arsitektur') ? 'active' : '' }}">
                        <i class="bi bi-diagram-3"></i> <span>Arsitektur</span>
                    </a>

                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                    </a>

                    <hr style="border-color: rgba(255,255,255,0.08); margin: 10px 0;">

                    <div class="section-title">Pengguna</div>
                    <a href="#" class="nav-link"><i class="bi bi-person-gear"></i><span>Admin</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-person-workspace"></i><span>Tutor</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-people-fill"></i><span>Siswa</span></a>

                    <div class="section-title">Fitur Sistem</div>
                    <a href="#" class="nav-link"><i class="bi bi-person-lines-fill"></i><span>Manajemen Data Siswa</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-mortarboard"></i><span>Manajemen Data Tutor</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-book"></i><span>Manajemen Pembelajaran</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-clipboard-check"></i><span>Manajemen Penilaian</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-calendar-check"></i><span>Absensi</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-megaphone"></i><span>Pengumuman</span></a>
                    <a href="#" class="nav-link"><i class="bi bi-bar-chart-line"></i><span>Laporan & Statistik</span></a>
                </nav>
            </div>

            <!-- Logout (tetap terlihat di bawah) -->
            <div class="logout-section mt-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main content -->
        <div class="content w-100">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
