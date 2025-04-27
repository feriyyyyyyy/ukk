<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="nav-content">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">{{ Auth::user()->name }}</div>
            <div class="menu">
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="content">
        <div class="welcome">
            <h2>Selamat Datang, Alumni</h2>
            <p>Terimakasih telah bergabung di sistem Tracer Study.</p>
            <p><strong>Mohon Lengkapi Data Diri Anda</strong> untuk mendukung pengembangan Alumni di masa depan.</p>
        </div>

        <!-- Profile Information -->
        <div class="profile-info">
            <img src="{{ asset('images/profil.png') }}" alt="Profile Picture" class="profile-img">
            <div class="profile-details">
                <p><strong>Nama:</strong> {{ $alumnis->nama_depan ?? 'Data alumni tidak ditemukan.' }} {{ $alumnis->nama_belakang ?? '' }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Jurusan:</strong> {{ $alumnis->konsentrasiKeahlian->konsentrasi_keahlian ?? 'Jurusan tidak ditemukan.' }}</p>
                <p><strong>Tahun Lulus:</strong> {{ $alumnis->tahunLulus->tahun_lulus ?? 'Tahun Lulus tidak ditemukan.' }}</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024-2025 FERI.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Logo"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram Logo"></a>
        </div>
    </footer>

</body>

</html>
