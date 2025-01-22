<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>

    <!-- Select2 CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f0f4f8;
            color: #333;
            font-size: 16px;
        }

        h1, h2 {
            text-align: center;
            color: #2A3E6E;
        }

        /* Form Container */
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for labels and input fields */
        label {
            font-weight: bold;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #4782B2;
            outline: none;
        }

        /* Select2 Dropdown Styles */
        .select2-container .select2-selection--single {
            height: 40px;
            padding: 6px 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 24px;
        }

        .select2-dropdown {
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .select2-results__option {
            padding: 8px 12px;
        }

        .select2-results__option--highlighted {
            background-color: #4782B2;
            color: white;
        }

        /* Submit Button */
        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #4782B2;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #375a7f;
        }

        /* Success Message */
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            input, select, textarea {
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
        <h2>Tambah Testimoni Alumni</h2>
        <form action="{{ route('testimoni.store') }}" method="POST">
            @csrf
            <!-- Alumni Dropdown -->
            <div class="mb-3">
                <label for="id_alumni" class="form-label">Alumni</label>
                <select class="form-select" id="id_alumni" name="id_alumni" required>
                    <option value="" disabled selected>-- Pilih Alumni --</option>
                    @foreach ($alumni as $alum)
                        <option value="{{ $alum->id_alumni }}">{{ $alum->nama_depan }} {{ $alum->nama_belakang }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Display Selected Alumni Name -->
            <div class="form-group">
                <label for="selected_alumni_name">Nama Alumni Terpilih:</label>
                <input type="text" id="selected_alumni_name" class="form-control" readonly>
            </div>

            <!-- Testimonial Input -->
            <div class="mb-3">
                <label for="testimoni" class="form-label">Testimoni</label>
                <textarea class="form-control" id="testimoni" name="testimoni" rows="4" required>{{ old('testimoni') }}</textarea>
            </div>

            <!-- Testimonial Date -->
            <div class="mb-3">
                <label for="tgl_testimoni" class="form-label">Tanggal Testimoni</label>
                <input type="date" class="form-control" id="tgl_testimoni" name="tgl_testimoni" value="{{ old('tgl_testimoni') }}" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#id_alumni').select2({
                placeholder: "Cari dan pilih nama alumni...",
                allowClear: true,
                width: '100%'
            });

            // Event handler for alumni selection change
            $('#id_alumni').on('change', function() {
                const selectedText = $(this).find('option:selected').text();
                $('#selected_alumni_name').val(selectedText);
            });
        });
    </script>

</body>

</html>
