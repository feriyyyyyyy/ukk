<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>

    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            background-color: #333;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form label {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
        }

        form input,
        form select,
        form textarea {
            padding: 12px;
            font-size: 14px;
            color: #333;
            border-radius: 8px;
            border: 1px solid #555;
            background-color: #444;
            transition: all 0.3s ease;
        }

        form input:focus,
        form select:focus,
        form textarea:focus {
            border-color: #70BFFF;
            outline: none;
        }

        .select2-container .select2-selection--single {
            padding: 12px;
            background-color: #444;
            color: #333;
            border-radius: 8px;
            border: 1px solid #555;
        }

        .select2-results__option--highlighted {
            background-color: #70BFFF;
            color: #333;
        }

        button {
            padding: 15px;
            background-color: #70BFFF;
            color: #222;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #4782B2;
            color: #fff;
        }

        /* Success Message */
        .success {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            .container {
                padding: 20px;
            }

            form input,
            form select,
            form textarea {
                padding: 10px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Tracer Kerja</h1>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('tracerkerja.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="id_alumni">Nama Alumni:</label>
                <select name="id_alumni" id="id_alumni" class="select2-container" required>
                    <option value="">Pilih Alumni</option>
                    @foreach ($alumni as $a)
                        <option value="{{ $a->id_alumni }}">{{ $a->nama_depan }} {{ $a->nama_belakang }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="selected_alumni_name">Nama Alumni Terpilih:</label>
                <input type="text" id="selected_alumni_name" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_pekerjaan">Pekerjaan:</label>
                <input type="text" name="tracer_kerja_pekerjaan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_nama">Nama Perusahaan:</label>
                <input type="text" name="tracer_kerja_nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_jabatan">Jabatan:</label>
                <input type="text" name="tracer_kerja_jabatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_status">Status:</label>
                <input type="text" name="tracer_kerja_status" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_lokasi">Lokasi:</label>
                <input type="text" name="tracer_kerja_lokasi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_alamat">Alamat:</label>
                <textarea name="tracer_kerja_alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_tgl_mulai">Tanggal Mulai:</label>
                <input type="date" name="tracer_kerja_tgl_mulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_gaji">Gaji:</label>
                <input type="text" name="tracer_kerja_gaji" class="form-control" required>
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#id_alumni').select2({
                placeholder: "Cari dan pilih nama alumni...",
                allowClear: true,
                width: '100%'
            });

            $('#id_alumni').on('change', function() {
                const selectedText = $(this).find('option:selected').text();
                $('#selected_alumni_name').val(selectedText);
            });
        });
    </script>
</body>

</html>
