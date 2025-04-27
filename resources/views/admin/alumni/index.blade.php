<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <!-- Memanggil file CSS eksternal yang sudah dipisah -->
  <link rel="stylesheet" href="{{ asset('css/adminalumni.css') }}">
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
  </nav>

  <div class="container">
    <h2>Data Alumni</h2>
    <table class="table">
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
        @foreach($alumni as $key => $alum)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $alum->nisn }}</td>
            <td>{{ $alum->nik }}</td>
            <td>{{ $alum->nama_depan }}</td>
            <td>{{ $alum->nama_belakang }}</td>
            <td>{{ $alum->jenis_kelamin }}</td>
            <td>{{ $alum->tempat_lahir }}</td>
            <td>{{ $alum->tgl_lahir }}</td>
            <td>{{ $alum->alamat }}</td>
            <td>{{ $alum->no_hp }}</td>
            <td>{{ $alum->email }}</td>
            <td>
              <a href="{{ route('alumni.show', $alum->id_alumni) }}" class="btn btn-primary">Detail</a>
              <form action="{{ route('alumni.destroy', $alum->id_alumni) }}" method="POST" style="display: inline;">
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
