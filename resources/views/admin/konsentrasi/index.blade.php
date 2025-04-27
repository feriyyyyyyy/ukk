<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/konsentrasi.css') }}">
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">{{ Auth::user()->name }}</div>
        </div>
        <div class="menu">
            <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Konsentrasi Keahlian</h1>
        <div class="tambah">
            <a href="{{ route('konsentrasi.create') }}" class="btn-add">Tambah Baru</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Program Keahlian</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($konsentrasiKeahlian as $item)
                <tr>
                    <td>{{ $item->id_konsentrasi_keahlian }}</td>
                    <td>{{ $item->id_program_keahlian }}</td>
                    <td>{{ $item->kode_konsentrasi_keahlian }}</td>
                    <td>{{ $item->konsentrasi_keahlian }}</td>
                    <td>
                        <a href="{{ route('konsentrasi.edit', $item->id_konsentrasi_keahlian) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('konsentrasi.destroy', $item->id_konsentrasi_keahlian) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
