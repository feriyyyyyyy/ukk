<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sekolah</title>
    <style>
        /* Reset Default Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        /* Form Container */
        .form-container {
            background: linear-gradient(145deg, #72c2ff, #3a83d3);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #fff;
            font-size: 30px;
            margin-bottom: 25px;
            font-weight: 700;
        }

        /* Form Styling */
        .form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-size: 14px;
            color: #fff;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"] {
            padding: 14px;
            border: 1px solid #fff;
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
            border-color: #72c2ff;
        }

        input[type="text"]:hover,
        input[type="email"]:hover {
            background-color: #e1f3ff;
        }

        /* Submit Button */
        button[type="submit"] {
            background: #72c2ff;
            color: #ffffff;
            font-size: 18px;
            padding: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background: #61a0d0;
            transform: scale(1.05);
        }

        button[type="submit"]:active {
            background: #4e85b2;
            transform: scale(1.02);
        }

        /* Media Queries for Smaller Screens */
        @media (max-width: 768px) {
            .form-container {
                padding: 30px;
                width: 90%;
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
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Tambah Sekolah</h1>

        <form action="{{ route('sekolah.store') }}" method="POST" class="form">
            @csrf

            <div class="form-group">
                <label for="npsn">NPSN:</label>
                <input type="text" id="npsn" name="npsn" required>
            </div>

            <div class="form-group">
                <label for="nss">NSS:</label>
                <input type="text" id="nss" name="nss" required>
            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah:</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="no_telp">No. Telepon:</label>
                <input type="text" id="no_telp" name="no_telp" required>
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" name="website">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
    </div>

</body>
</html>
