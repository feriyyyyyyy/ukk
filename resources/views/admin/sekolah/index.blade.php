<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/sekolah.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar">
        <div class="navbar__left">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="navbar__right">
            <button class="navbar__button" onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            <button class="navbar__button" onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            <button class="navbar__button" onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            <button class="navbar__button" onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
        </div>
        <div class="navbar__dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Dropdown">
            </button>
            <ul class="dropdown-menu" id="dropdownMenu">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout"> Logout
                    </button>
                </form>
            </ul>
        </div>
    </nav>

    <header class="page-header">
        <h1>Daftar Sekolah</h1>
        <a href="{{ route('sekolah.create') }}" class="btn-add">Tambah Sekolah</a>
    </header>

    <section class="table-section">
        <table class="sekolah-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>NSS</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Website</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sekolah as $sekolahs)
                    <tr>
                        <td>{{ $sekolahs->id_sekolah }}</td>
                        <td>{{ $sekolahs->npsn }}</td>
                        <td>{{ $sekolahs->nss }}</td>
                        <td>{{ $sekolahs->nama_sekolah }}</td>
                        <td>{{ $sekolahs->alamat }}</td>
                        <td>{{ $sekolahs->no_telp }}</td>
                        <td>{{ $sekolahs->website }}</td>
                        <td>{{ $sekolahs->email }}</td>
                        <td>
                            <a href="{{ route('sekolah.edit', $sekolahs->id_sekolah) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('sekolah.destroy', $sekolahs->id_sekolah) }}" method="POST" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn-delete" onclick="confirmDelete(this)">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="no-data">Tidak ada data sekolah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script>
        function confirmDelete(button) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data yang dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
</body>
</html>
