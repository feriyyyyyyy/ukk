<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bidang Keahlian</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Global Styling */
        :root {
            --primary-color: #3498db;
            --secondary-color: #70a1ff;
            --bg-color: #f0f4f8;
            --text-color: #333;
            --border-color: #ddd;
            --btn-bg-color: #4CAF50;
            --btn-bg-hover-color: #45a049;
            --btn-text-color: #fff;
            --input-bg-color: #ffffff;
            --input-focus-color: #3498db;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form {
            background-color: var(--input-bg-color);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px var(--shadow-color);
            width: 100%;
            max-width: 600px;
        }

        .form label {
            font-size: 16px;
            font-weight: bold;
            color: var(--text-color);
            display: block;
            margin-bottom: 8px;
        }

        .form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            background-color: var(--input-bg-color);
            transition: border-color 0.3s ease;
        }

        .form input:focus {
            border-color: var(--input-focus-color);
            outline: none;
        }

        .form button {
            width: 100%;
            padding: 12px;
            background-color: var(--btn-bg-color);
            color: var(--btn-text-color);
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form button:hover {
            background-color: var(--btn-bg-hover-color);
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            h1 {
                font-size: 26px;
            }

            .form {
                padding: 20px;
            }

            .form input {
                padding: 10px;
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
        <h1>Edit Bidang Keahlian</h1>
        <form action="{{ route('bidang.update', $bidangKeahlian->id_bidang_keahlian) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="kode_bidang_keahlian">Kode Bidang Keahlian</label>
                <input type="text" id="kode_bidang_keahlian" name="kode_bidang_keahlian" value="{{ $bidangKeahlian->kode_bidang_keahlian }}" required>
            </div>
            <div>
                <label for="bidang_keahlian">Nama Bidang Keahlian</label>
                <input type="text" id="bidang_keahlian" name="bidang_keahlian" value="{{ $bidangKeahlian->bidang_keahlian }}" required>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
