<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
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

    <!-- Main Content Section -->
    <main class="container py-4">
        <!-- Welcome Section -->
        <div class="text-center mb-5">
            <h2 class="text-primary">Selamat Datang, Admin</h2>
            <p>Kelola data alumni dan laporan tracer study dengan mudah.</p>
        </div>

        <!-- Admin Actions Section -->
        <section class="mb-5">
            <h3 class="text-center text-secondary mb-4">Kelola Data</h3>
            <div class="row g-3">
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="window.location='{{ route('sekolah.index') }}';">Kelola Sekolah</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="window.location='{{ route('program.index') }}';">Kelola Program Keahlian</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="window.location='{{ route('konsentrasi.index') }}';">Kelola Konsentrasi Keahlian</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="window.location='{{ route('bidang.index') }}';">Kelola Bidang Keahlian</button>
                </div>
            </div>
        </section>

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
    <script>
        const configChart = (ctx, label, data, color) => {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['2018', '2019', '2020', '2021', '2022'],
                    datasets: [{
                        label: label,
                        data: data,
                        borderColor: color,
                        backgroundColor: `${color}33`,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: { responsive: true }
            });
        };

        configChart(document.getElementById('tracerChart').getContext('2d'), 'Jumlah Alumni', [120, 150, 200, 250, 300], 'rgba(75, 192, 192, 1)');
        configChart(document.getElementById('tracerChart-kerja').getContext('2d'), 'Jumlah Alumni Bekerja', [80, 100, 150, 200, 250], 'rgba(255, 99, 132, 1)');
    </script>
</body>

</html>
