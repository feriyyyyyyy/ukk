<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Bidang Keahlian Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/bidang.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
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
            <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Daftar Bidang Keahlian</h1>
        <div class="tmbh">
            <a href="{{ route('bidang.create') }}" class="btn">Tambah Bidang Keahlian</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Bidang</th>
                    <th>Nama Bidang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bidangKeahlian as $bidang)
                <tr>
                    <td>{{ $bidang->id_bidang_keahlian }}</td>
                    <td>{{ $bidang->kode_bidang_keahlian }}</td>
                    <td>{{ $bidang->bidang_keahlian }}</td>
                    <td>
                        <a href="{{ route('bidang.edit', $bidang->id_bidang_keahlian) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('bidang.destroy', $bidang->id_bidang_keahlian) }}" method="POST" class="delete-form">
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

</body>

</html>
