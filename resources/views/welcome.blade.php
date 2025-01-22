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

    <div class="chart-section container">
    <h3>Diagram Data Alumni</h3>
    <canvas id="tracerChart"></canvas>
    <p>Jumlah Alumni: 600</p>
</div>

<div class="chart-section container">
    <h3>Diagram Data Pekerjaan Alumni</h3>
    <canvas id="tracerChart-kerja"></canvas>
    <p>Jumlah Alumni: 600</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data untuk diagram garis pertama
    const dataAlumni = {
        labels: ['2018', '2019', '2020', '2021', '2022'],
        datasets: [{
            label: 'Jumlah Alumni',
            data: [120, 150, 200, 250, 300],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            fill: true,
            tension: 0.4
        }]
    };

    // Data untuk diagram garis kedua
    const dataPekerjaan = {
        labels: ['2018', '2019', '2020', '2021', '2022'],
        datasets: [{
            label: 'Jumlah Alumni Bekerja',
            data: [80, 100, 150, 200, 250],
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            fill: true,
            tension: 0.4
        }]
    };

    // Membuat diagram garis pertama
    const ctx1 = document.getElementById('tracerChart').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: dataAlumni,
        options: {
            responsive: true,
            plugins: {
                legend: { display: true }
            }
        }
    });

    // Membuat diagram garis kedua
    const ctx2 = document.getElementById('tracerChart-kerja').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: dataPekerjaan,
        options: {
            responsive: true,
            plugins: {
                legend: { display: true }
            }
        }
    });
</script>


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
