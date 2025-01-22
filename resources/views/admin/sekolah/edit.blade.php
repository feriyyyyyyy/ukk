<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sekolah</title>
    <style>
        /* Reset Default Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Main Form Container */
        .container {
            background: linear-gradient(145deg, #6a7dff, #8a9bff);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 550px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 28px;
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-size: 14px;
            color: #ffffff;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"] {
            padding: 12px;
            border: 1px solid #ffffff;
            border-radius: 10px;
            font-size: 16px;
            color: #333;
            background: #f9f9f9;
            outline: none;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            background-color: #ffffff;
            border-color: #6a7dff;
        }

        input[type="text"]:hover,
        input[type="email"]:hover {
            background-color: #f0f4ff;
        }

        /* Submit Button */
        button[type="submit"] {
            background: #6a7dff;
            color: #ffffff;
            font-size: 16px;
            padding: 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background: #4f64cc;
            transform: scale(1.05);
        }

        button[type="submit"]:active {
            background: #3b4a99;
            transform: scale(1.02);
        }

        /* Media Query for Small Screens */
        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 26px;
            }

            label {
                font-size: 12px;
            }

            input[type="text"],
            input[type="email"] {
                font-size: 14px;
            }

            button[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Sekolah</h1>

        <form action="{{ route('sekolah.update', $sekolah->id_sekolah) }}" method="POST" class="form">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="npsn">NPSN:</label>
                <input type="text" id="npsn" name="npsn" value="{{ $sekolah->npsn }}" required>
            </div>

            <div class="form-group">
                <label for="nss">NSS:</label>
                <input type="text" id="nss" name="nss" value="{{ $sekolah->nss }}" required>
            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah:</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="{{ $sekolah->alamat }}" required>
            </div>

            <div class="form-group">
                <label for="no_telp">No. Telepon:</label>
                <input type="text" id="no_telp" name="no_telp" value="{{ $sekolah->no_telp }}" required>
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" name="website" value="{{ $sekolah->website }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $sekolah->email }}">
            </div>

            <button type="submit" class="btn-submit">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>
