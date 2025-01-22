<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Program Keahlian</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <style>
        /* Reset dan Gaya Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya Body */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Kontainer Form */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Form Group */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            background-color: #fafafa;
            transition: border-color 0.3s ease-in-out;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Tombol */
        button {
            padding: 12px 25px;
            background-color: #2980b9;
            color: white;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3498db;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
                max-width: 100%;
            }

            h1 {
                font-size: 24px;
            }

            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Edit Program Keahlian</h1>
        <form action="{{ route('program.update', $programKeahlian->id_program_keahlian) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_program_keahlian">Kode Program</label>
                <input type="text" name="kode_program_keahlian" id="kode_program_keahlian"
                    value="{{ $programKeahlian->kode_program_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="program_keahlian">Nama Program</label>
                <input type="text" name="program_keahlian" id="program_keahlian"
                    value="{{ $programKeahlian->program_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="id_bidang_keahlian">Bidang Keahlian</label>
                <select name="id_bidang_keahlian" id="id_bidang_keahlian">
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}"{{
                            $bidang->id_bidang_keahlian == $programKeahlian->id_bidang_keahlian ? 'selected' : '' }}>
                            {{ $bidang->bidang_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
