<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/status.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">{{ Auth::user()->name }}</div>
        </div>
        <div class="menu">
            <button onclick="window.location='{{ route('admin.dashboard') }}';" class="menu-item">Home</button>
            <button onclick="window.location='{{ route('admin.alumni.index') }}';" class="menu-item">Data Alumni</button>
            <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';" class="menu-item">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';" class="menu-item">Tracer Kerja</button>
        </div>
        <div class="dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Dropdown Menu">
            </button>
            <ul class="dropdown-menu" id="dropdownMenu">
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-item">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Login Icon">
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>
            </ul>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <div class="header">
            <a href="{{ route('status-alumni.create') }}" class="btn btn-primary">Tambah Status Alumni</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                <tr>
                    <td>{{ $status->id_status_alumni }}</td>
                    <td>{{ $status->status }}</td>
                    <td>
                        <a href="{{ route('status-alumni.edit', $status->id_status_alumni) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('status-alumni.destroy', $status->id_status_alumni) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus status ini?')">Hapus</button>
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
