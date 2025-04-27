<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-light">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                Admin Panel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.alumni.index') }}">Data Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.TracerKuliah.index') }}">Tracer Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.TracerKerja.index') }}">Tracer Kerja</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gradient text-white text-center py-5 mb-4">
        <h1>Selamat Datang, Admin</h1>
        <p>Kelola data alumni dan laporan tracer study dengan mudah.</p>
    </header>

    <!-- Main Content Section -->
    <main class="container py-4">
        <!-- Admin Actions Section -->
        <section class="mb-5">
            <h3 class="text-center text-secondary mb-4">Kelola Data</h3>
            <div class="row g-3">
                <!-- Card Layout for Actions -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Sekolah</h5>
                            <p class="card-text">Kelola program untuk pengembangan keterampilan dan banyak lagi.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('sekolah.index') }}';">Kelola Sekolah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-clipboard-check mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Program Keahlian</h5>
                            <p class="card-text">Kelola program untuk pengembangan keterampilan dan banyak lagi.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('program.index') }}';">Kelola Program Keahlian</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-bar-chart-line-fill mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Konsentrasi Keahlian</h5>
                            <p class="card-text">Mengatur bidang keahlian dan bidang konsentrasi.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('konsentrasi.index') }}';">Kelola Konsentrasi Keahlian</button>
                        </div>
                    </div>
                </div>

                <!-- Additional Cards for Other Sections -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-person-check-fill mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Status Alumni</h5>
                            <p class="card-text">Kelola tahun kelulusan untuk pelacakan alumni.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('status-alumni.index') }}';">Kelola Status Alumni</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-event-fill mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Tahun Lulus</h5>
                            <p class="card-text">Kelola tahun kelulusan untuk pelacakan alumni.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('tahun-lulus.index') }}';">Kelola Tahun Lulus</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body text-center">
                            <i class="bi bi-award-fill mb-3" style="font-size: 2rem;"></i>
                            <h5 class="card-title">Kelola Bidang Keahlian</h5>
                            <p class="card-text">Kelola bidang keterampilan profesional.</p>
                            <button class="btn btn-secondary w-100" onclick="window.location='{{ route('bidang.index') }}';">Kelola Bidang Keahlian</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024-2025 Feri. All rights reserved.</p>
        <div>
            <a href="#" class="text-white me-2">
                <img src="{{ asset('images/tk.png') }}" alt="Logo" width="30">
            </a>
            <a href="#" class="text-white">
                <img src="{{ asset('images/ig.jfif') }}" alt="Logo" width="30">
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
