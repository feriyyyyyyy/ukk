<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/kerja.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="Username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
            </div>
        </div>
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-icon">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Data Tracer Kerja</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Nama Pekerjaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Alamat</th>
                    <th>Tanggal Mulai</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tracerKerja as $key => $kerja)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kerja->alumni ? $kerja->alumni->nama_depan . ' ' . $kerja->alumni->nama_belakang : 'Tidak Ditemukan' }}</td>
                        <td>{{ $kerja->tracer_kerja_pekerjaan }}</td>
                        <td>{{ $kerja->tracer_kerja_nama }}</td>
                        <td>{{ $kerja->tracer_kerja_jabatan }}</td>
                        <td>{{ $kerja->tracer_kerja_status }}</td>
                        <td>{{ $kerja->tracer_kerja_lokasi }}</td>
                        <td>{{ $kerja->tracer_kerja_alamat }}</td>
                        <td>{{ $kerja->tracer_kerja_tgl_mulai }}</td>
                        <td>{{ $kerja->tracer_kerja_gaji }}</td>
                        <td>
                            <form action="{{ route('TracerKerja.destroy', $kerja->id_tracer_kerja) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024-2027 feri. Hak Cipta. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
