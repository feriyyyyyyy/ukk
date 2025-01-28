<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dan Hapus Tahun Lulus</title>
    <style>
        :root {
            --primary-color: #4CAF50;
            --danger-color: #FF5733;
            --hover-danger-color: #E04A2E;
            --secondary-color: #4782B2;
            --hover-color: #45a049;
            --background-color: #F9F9F9;
            --text-color: #333;
            --shadow-color: rgba(0, 0, 0, 0.2);
            --input-border-color: #CCC;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background: #FFFFFF;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px var(--shadow-color);
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: var(--text-color);
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--input-border-color);
            border-radius: 6px;
            font-size: 14px;
            color: var(--text-color);
            transition: all 0.3s;
        }

        .form-group input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 5px var(--primary-color);
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 15px;
        }

        button:hover {
            opacity: 0.9;
        }

        .btn-primary {
            background-color: var(--primary-color);
        }

        .btn-danger {
            background-color: var(--danger-color);
        }

        .btn-danger:hover {
            background-color: var(--hover-danger-color);
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            font-size: 14px;
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: var(--hover-color);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit dan Hapus Tahun Lulus</h1>
        <form action="{{ route('tahun-lulus.update', $tahunLulus->id_tahun_lulus) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="text" id="tahun_lulus" name="tahun_lulus" value="{{ $tahunLulus->tahun_lulus }}" required maxlength="4" placeholder="Masukkan Tahun Lulus">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" value="{{ $tahunLulus->keterangan }}" maxlength="50" placeholder="Masukkan Keterangan (Opsional)">
            </div>
            <button type="submit" class="btn-primary">Perbarui</button>
        </form>
        
        <a href="{{ route('tahun-lulus.index') }}" class="back-button">← Kembali ke daftar tahun lulus</a>
    </div>
</body>

</html>
