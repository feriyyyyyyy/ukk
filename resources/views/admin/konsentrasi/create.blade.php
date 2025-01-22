<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Konsentrasi Keahlian</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Main body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f1;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Container for the form */
        .form-container {
            background-color: #fff;
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Form header */
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: bold;
        }

        /* Form group (label and input field) */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
        }

        /* Styling for the submit button */
        .submit-btn {
            background-color: #1abc9c;
            color: white;
            padding: 14px 28px;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #16a085;
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
                width: 100%;
            }

            h1 {
                font-size: 24px;
            }

            .submit-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Tambah Konsentrasi Keahlian</h1>
        <form action="{{ route('konsentrasi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_program_keahlian">ID Program Keahlian</label>
                <input type="number" id="id_program_keahlian" name="id_program_keahlian" required>
            </div>

            <div class="form-group">
                <label for="kode_konsentrasi_keahlian">Kode Konsentrasi</label>
                <input type="text" id="kode_konsentrasi_keahlian" name="kode_konsentrasi_keahlian" required>
            </div>

            <div class="form-group">
                <label for="konsentrasi_keahlian">Nama Konsentrasi</label>
                <input type="text" id="konsentrasi_keahlian" name="konsentrasi_keahlian" required>
            </div>

            <button type="submit" class="submit-btn">Simpan</button>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
