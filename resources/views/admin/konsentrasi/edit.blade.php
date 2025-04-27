<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konsentrasi Keahlian</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Main body styling */
        body {
            background-color: #d3d3d3; /* Warna abu-abu */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Container for the form */
        .form-container {
            background-color: #f0f0f0; /* Warna abu-abu terang */
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Form header */
        h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: bold;
        }

        /* Form group (label and input field) */
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #bbb;
            border-radius: 5px;
            background: #fff;
        }

        /* Styling for the submit button */
        .btn-update {
            background-color: #555; /* Abu-abu gelap */
            color: white;
            padding: 12px;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }

        .btn-update:hover {
            background-color: #777;
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .btn-update {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Edit Konsentrasi Keahlian</h1>
        <form action="{{ route('konsentrasi.update', $konsentrasiKeahlian->id_konsentrasi_keahlian) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_program_keahlian">ID Program Keahlian</label>
                <input type="number" id="id_program_keahlian" name="id_program_keahlian"
                    value="{{ $konsentrasiKeahlian->id_program_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="kode_konsentrasi_keahlian">Kode Konsentrasi</label>
                <input type="text" id="kode_konsentrasi_keahlian" name="kode_konsentrasi_keahlian"
                    value="{{ $konsentrasiKeahlian->kode_konsentrasi_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="konsentrasi_keahlian">Nama Konsentrasi</label>
                <input type="text" id="konsentrasi_keahlian" name="konsentrasi_keahlian"
                    value="{{ $konsentrasiKeahlian->konsentrasi_keahlian }}" required>
            </div>
            <button type="submit" class="btn-update">Update</button>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>
