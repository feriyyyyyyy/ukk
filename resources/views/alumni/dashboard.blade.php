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
            <div class="username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
        </div>
        <div class="menu-dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <form id="logout-form" action="{{ route('alumni.profile.index') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/profile.png') }}" alt="Profile Icon">
                    </button>
                </form>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>
            </ul>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang, Alumni</h2>
            <h3>Terimakasih telah bergabung</h3>
            <h3>di sistem Tracer Study</h3>
            <h3><span> Mohon Lengkapi Data Diri Anda </span></h3>
            <h3>untuk mendukung pengembangan</h3>
            <h3>Alumni di masa depan</h3>
        </div>
        <div class="info-profile">
            <div class="table-profile">
                <div class="profile-img">
                    <img src="{{ asset('images/profil.png') }}" alt="Profil">
                </div>
                <div class="profile-item">
                    <p>Nama : {{ Auth::user()->name }}</p>
                </div>
                <div class="profile-item">
                    <p>Email : {{ Auth::user()->email }}</p>
                </div>
                <div class="profile-item">
                    <p>Jurusan : {{ Auth::user()->jurusan }}</p>
                </div>
                <div class="profile-item">
                    <p>Tahun Lulus : {{ Auth::user()->tahun_lulus }}</p>
                </div>
            </div>
        </div>
    </div>
<section class="charts-section">
    <div class="chart-card">
        <h4>Data Alumni</h4>
        <canvas id="chartAlumni"></canvas>
        <p>Jumlah: 600</p>
    </div>
    <div class="chart-card">
        <h4>Data Pekerjaan</h4>
        <canvas id="chartPekerjaan"></canvas>
        <p>Jumlah: 600</p>
    </div>
</section>
<script src="{{ asset('js/alumni.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const configChart = (ctx, label, data, colors) => {
        new Chart(ctx, {
            type: 'doughnut', // Ubah menjadi doughnut atau pie sesuai kebutuhan
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022'],
                datasets: [{
                    label: label,
                    data: data,
                    backgroundColor: colors, // Warna untuk tiap bagian
                    borderColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff'], // Border putih untuk tiap segmen
                    borderWidth: 2,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    };

    // Warna pastel untuk diagram
    const alumniColors = ['#FFB3BA', '#FFCC99', '#FF9966', '#FF6699', '#FF3366'];
    const pekerjaanColors = ['#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#0288D1'];

    configChart(document.getElementById('chartAlumni').getContext('2d'), 'Alumni', [120, 150, 200, 250, 300], alumniColors);
    configChart(document.getElementById('chartPekerjaan').getContext('2d'), 'Pekerjaan', [80, 100, 150, 200, 250], pekerjaanColors);
</script>
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
