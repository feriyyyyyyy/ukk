<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/bidang.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
        
             height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
    </style>
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
                <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>            </div>
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
        <h1>Daftar Bidang Keahlian</h1>
        <div class="tmbh">
            <a href="{{ route('bidang.create') }}" class="btn btn-success">Tambah Bidang Keahlian</a>
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
                        <form action="{{ route('bidang.destroy', $bidang->id_bidang_keahlian) }}" method="POST" style="display: inline-block;">
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