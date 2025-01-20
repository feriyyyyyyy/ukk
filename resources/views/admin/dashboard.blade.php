<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="nav">
        <div class="nav-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">
                {{ Auth::user()->name }}
            </div>
            <button class="burger-menu" id="burgerMenu">
                <img src="{{ asset('icons/menu.png') }}" alt="Menu">
            </button>
            <ul class="menu" id="menuList">
                <li><button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button></li>
                <li><button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button></li>
                <li><button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button></li>
                <li><button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main class="main-content">
        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="welcome-message">
                <h2>Selamat Datang, Admin</h2>
                <p>Terimakasih telah meluangkan waktu di sistem Tracer Study. Pantau Data Alumni dan Laporan Tracer Study dengan Mudah.</p>
            </div>
        </section>

        <!-- Admin Actions Section -->
        <section class="admin-actions-section">
            <h3>Kelola Data</h3>
            <div class="admin-actions-grid">
                <button onclick="window.location='{{ route('sekolah.index') }}';">Kelola Sekolah</button>
                <button onclick="window.location='{{ route('program.index') }}';">Kelola Program Keahlian</button>
                <button onclick="window.location='{{ route('konsentrasi.index') }}';">Kelola Konsentrasi Keahlian</button>
                <button onclick="window.location='{{ route('bidang.index') }}';">Kelola Bidang Keahlian</button>
                <button onclick="window.location='{{ route('status-alumni.index') }}';">Kelola Status Alumni</button>
                <button onclick="window.location='{{ route('tahun-lulus.index') }}';">Kelola Tahun Lulus</button>
                <button onclick="window.location='{{ route('testimoni.index') }}';">Testimoni</button>
            </div>
        </section>

        <!-- Charts Section -->
        <section class="charts-section">
            <div class="chart-card">
                <h3>Diagram Data Alumni</h3>
                <canvas id="tracerChart"></canvas>
                <p>Jumlah Alumni: 600</p>
            </div>
            <div class="chart-card">
                <h3>Diagram Data Pekerjaan Alumni</h3>
                <canvas id="tracerChart-kerja"></canvas>
                <p>Jumlah Alumni: 600</p>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <p>&copy; 2024-2025 feri .</p>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
