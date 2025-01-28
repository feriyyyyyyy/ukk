<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/tahun.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="Username">{{ Auth::user()->name }}</div>
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
    </nav>

    <!-- Main Container -->
    <div class="container">
        <div class="tmbh">
            <a href="{{ route('tahun-lulus.create') }}" class="btn btn-primary mb-3">Tambah Tahun Lulus</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tahun Lulus</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tahunLulus as $tahun)
                <tr>
                    <td>{{ $tahun->id_tahun_lulus }}</td>
                    <td>{{ $tahun->tahun_lulus }}</td>
                    <td>{{ $tahun->keterangan }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('tahun-lulus.edit', $tahun->id_tahun_lulus) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('tahun-lulus.destroy', $tahun->id_tahun_lulus) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Hapus</button>
        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
