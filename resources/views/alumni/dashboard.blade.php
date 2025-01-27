<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">{{ Auth::user()->name }}</div>
        </div>
        <div class="menu">
            <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
        </div>
        <div class="menu-dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <form action="{{ route('alumni.profile.index') }}" method="GET">
                    @csrf
                    <button type="submit"><img src="{{ asset('icons/profile.png') }}" alt="Profile Icon"></button>
                </form>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"><img src="{{ asset('icons/logout.png') }}" alt="Logout Icon"></button>
                </form>
            </ul>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang, Alumni</h2>
            <h3>Terimakasih telah bergabung di sistem Tracer Study</h3>
            <h3><span>Mohon Lengkapi Data Diri Anda</span> untuk mendukung pengembangan Alumni di masa depan.</h3>
        </div>
        <div class="info-profile">
            <div class="table-profile">
                <img src="{{ asset('images/profil.png') }}" alt="Profil" class="profile-img">
                <div class="profile-item">Nama : {{ Auth::user()->name }}</div>
                <div class="profile-item">Email : {{ Auth::user()->email }}</div>
                <div class="profile-item">Jurusan : {{ Auth::user()->jurusan }}</div>
                <div class="profile-item">Tahun Lulus : {{ Auth::user()->tahun_lulus }}</div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024-2025 FERI.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Instagram Logo">
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
