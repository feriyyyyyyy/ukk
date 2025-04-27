<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="nav-menu">
                <button onclick="window.location='{{ route('login') }}';">Login</button>
                <div class="burger-menu" id="burgerMenu">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Menu">
                </div>
                <ul class="dropdown" id="dropdownMenu">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h2>Selamat Datang, Alumni</h2>
        <p>Terimakasih telah bergabung di sistem Tracer Study</p>
        <p><span>Mohon Lengkapi Data Diri Anda</span> untuk mendukung pengembangan Alumni di masa depan</p>
    </div>

    <div class="profile-section container">
        <div class="profile-card">
            <img src="{{ asset('images/profil.png') }}" alt="Profil">
            <div class="profile-info">
                <p>Nama:</p>
                <p>Email:</p>
                <p>Jurusan:</p>
                <p>Tahun Lulus:</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024-2025 Feri Anggara. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Logo"></a>
                <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Logo"></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/welcome.js') }}"></script>

</body>

</html>
