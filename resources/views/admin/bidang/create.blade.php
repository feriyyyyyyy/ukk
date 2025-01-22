<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Global Styles */
        :root {
            --primary-color: #4E73DF;
            --secondary-color: #F1F1F1;
            --btn-color: #2D6BB6;
            --hover-color: #1F4E91;
            --text-color: #333;
            --border-color: #ddd;
            --input-focus-color: #4E73DF;
        }

        body {
            background-color: #F9FBFC;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Styling untuk Form */
        .form {
            max-width: 550px;
            width: 100%;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Styling untuk Judul Form */
        .form h1 {
            font-size: 30px;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Styling untuk Label */
        .form label {
            font-size: 16px;
            font-weight: bold;
            color: var(--text-color);
            text-align: left;
            display: block;
            margin-bottom: 8px;
        }

        /* Styling untuk Input */
        .form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 14px;
            color: var(--text-color);
            transition: border-color 0.3s ease-in-out;
        }

        /* Fokus pada Input */
        .form input:focus {
            border-color: var(--input-focus-color);
            outline: none;
        }

        /* Styling untuk Tombol */
        .form button {
            width: 100%;
            padding: 12px;
            background-color: var(--btn-color);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Hover effect untuk Tombol */
        .form button:hover {
            background-color: var(--hover-color);
            transform: scale(1.05);
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .form {
                padding: 20px;
            }

            .form h1 {
                font-size: 26px;
            }

            .form input {
                padding: 10px;
                font-size: 13px;
            }

            .form button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="form">
        <h1>Tambah Bidang Keahlian</h1>
        <form action="{{ route('bidang.store') }}" method="POST">
            @csrf
            <div>
                <label for="kode_bidang_keahlian">Kode Bidang Keahlian</label>
                <input type="text" id="kode_bidang_keahlian" name="kode_bidang_keahlian" required>
            </div>
            <div>
                <label for="bidang_keahlian">Nama Bidang Keahlian</label>
                <input type="text" id="bidang_keahlian" name="bidang_keahlian" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
