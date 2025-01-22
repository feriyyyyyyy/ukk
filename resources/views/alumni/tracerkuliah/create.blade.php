<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tracer Kuliah</title>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        :root {
            --primary-color: #1A2189;
            --secondary-color: #4782B2;
            --highlight-color: #70BFFF;
            --background-color: #f4f9ff;
            --text-color: #333;
            --btn-color: #4782B2;
            --btn-hover-color: #1A2189;
            --border-color: #ccc;
        }

        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            color: var(--text-color);
        }

        h1 {
            text-align: center;
            color: var(--primary-color);
            margin-top: 40px;
            font-size: 28px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .alert-success {
            padding: 15px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            border-radius: 5px;
            color: #155724;
            margin-bottom: 20px;
        }

        form label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: var(--primary-color);
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        form input:focus,
        form select:focus,
        form textarea:focus {
            border-color: var(--highlight-color);
            outline: none;
        }

        .form-group-active {
            margin-bottom: 20px;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: var(--btn-color);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: var(--btn-hover-color);
        }

        .select2-container .select2-selection--single {
            height: 45px;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            font-size: 16px;
            color: var(--text-color);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .container {
                padding: 20px;
            }

            form input,
            form select,
            form textarea {
                font-size: 14px;
            }

            form button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Tracer Kuliah</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('tracerkuliah.store') }}" method="POST">
            @csrf

            <div class="form-group-active">
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
                <label for="tracer_kuliah_kampus">Nama Kampus:</label>
                <input type="text" name="tracer_kuliah_kampus" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kuliah_status">Status:</label>
                <input type="text" name="tracer_kuliah_status" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kuliah_jenjang">Jenjang:</label>
                <input type="text" name="tracer_kuliah_jenjang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kuliah_jurusan">Jurusan:</label>
                <input type="text" name="tracer_kuliah_jurusan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kuliah_linier">Linier:</label>
                <input type="text" name="tracer_kuliah_linier" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kuliah_alamat">Alamat Kampus:</label>
                <textarea name="tracer_kuliah_alamat" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            // Initialize Select2
            $('#id_alumni').select2({
                placeholder: "Cari dan pilih nama alumni...",
                allowClear: true,
                width: '100%'
            });

            // Capture change event on alumni select
            $('#id_alumni').on('change', function () {
                const selectedText = $(this).find('option:selected').text();
                $('#selected_alumni_name').val(selectedText);
            });
        });
    </script>
</body>

</html>
