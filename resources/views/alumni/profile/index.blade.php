<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <style>
        body{
            height: 800px;
        }
    </style> --}}
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
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <form id="logout-form" action="{{ route('alumni.profile.index') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/profile.png') }}" alt="Logout Icon">
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
   

    <div class="table-section">
        <h1>Data Diri</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($alumni)
                    <tr>
                        <td>{{ $alumni->id_alumni }}</td>
                        <td>{{ $alumni->nisn }}</td>
                        <td>{{ $alumni->nik }}</td>
                        <td>{{ $alumni->nama_depan }}</td>
                        <td>{{ $alumni->nama_belakang }}</td>
                        <td>{{ $alumni->jenis_kelamin }}</td>
                        <td>{{ $alumni->tempat_lahir }}</td>
                        <td>{{ $alumni->tgl_lahir }}</td>
                        <td>{{ $alumni->alamat }}</td>
                        <td>{{ $alumni->no_hp }}</td>
                        <td>{{ $alumni->email }}</td>
                        <td>
                            <a href="{{ route('profile.alumni', $alumni->id_alumni) }}" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="12" class="text-center">Data belum tersedia.</td>
                    </tr>
                @endif
            </tbody>            
        </table>
    </div>
    <div class="table-section">
        <h1>Data Kuliah</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Nama Kampus</th>
                    <th>Status</th>
                    <th>Jenjang</th>
                    <th>Jurusan</th>
                    <th>Linier</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($tracerKuliah)
                    <tr>
                        <td>{{ $tracerKuliah->id_tracer_kuliah }}</td>
                        <td>{{ $tracerKuliah->alumni ? $tracerKuliah->alumni->nama_depan . ' ' . $tracerKuliah->alumni->nama_belakang : 'Tidak Ditemukan' }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_kampus }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_status }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_jenjang }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_jurusan }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_linier }}</td>
                        <td>{{ $tracerKuliah->tracer_kuliah_alamat }}</td>
                        <td>
                            <a href="{{ route('profile.kuliah', $tracerKuliah->id_tracer_kuliah) }}" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="9" class="text-center">Data belum tersedia.</td>
                    </tr>
                @endif
            </tbody>            
        </table>
    </div>

    <div class="table-section">
        <h1>Data Pekerjaan</h1>
        <table>
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
                @if ($tracerKerja)
                    <tr>
                        <td>{{ $tracerKerja->id_tracer_kerja }}</td>
                        <td>{{ $tracerKerja->alumni ? $tracerKerja->alumni->nama_depan . ' ' . $tracerKerja->alumni->nama_belakang : 'Tidak Ditemukan' }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_pekerjaan }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_nama }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_jabatan }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_status }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_lokasi }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_alamat }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_tgl_mulai }}</td>
                        <td>{{ $tracerKerja->tracer_kerja_gaji }}</td>
                        <td>
                            <a href="{{ route('profile.kerja', $tracerKerja->id_tracer_kerja) }}" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="11" class="text-center">Data belum tersedia.</td>
                    </tr>
                @endif
            </tbody>            
        </table>
    </div>

    <script src="{{ asset('js/alumni.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Andika. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>




</html>
