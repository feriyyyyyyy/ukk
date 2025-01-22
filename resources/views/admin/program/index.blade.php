<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/program.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="nav-container">
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
            <div class="menu-dropdown">
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
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-container">
        <h1>Program Keahlian</h1>
        <div class="add-program-btn">
            <a href="{{ route('program.create') }}">Tambah Program Keahlian</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Program</th>
                    <th>Nama Program</th>
                    <th>Bidang Keahlian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($programKeahlian as $program)
                <tr>
                    <td>{{ $program->id_program_keahlian }}</td>
                    <td>{{ $program->kode_program_keahlian }}</td>
                    <td>{{ $program->program_keahlian }}</td>
                    <td>{{ $program->bidangKeahlian->bidang_keahlian }}</td>
                    <td>
                        <a href="{{ route('program.edit', $program->id_program_keahlian) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('program.destroy', $program->id_program_keahlian) }}" method="POST" style="display: inline-block;">
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

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
