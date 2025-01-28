<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sekolah</title>
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #70BFFF;
            --text-color: #333;
            --background-color: #f9f9f9;
            --header-color: #1A2189;
            --button-hover-color: #45a049;
            --box-shadow: rgba(0, 0, 0, 0.2);
            --input-border-color: #ccc;
            --border-radius: 8px;
            --font-family: 'Arial', sans-serif;
        }

        body {
            font-family: var(--font-family);
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background-color: var(--background-color);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 8px var(--box-shadow);
            text-align: center;
        }

        h1 {
            color: var(--header-color);
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            color: var(--text-color);
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--input-border-color);
            border-radius: var(--border-radius);
            font-size: 16px;
            color: var(--text-color);
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        button {
            background-color: var(--primary-color);
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: var(--button-hover-color);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            button {
                font-size: 16px;
                padding: 10px 15px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Edit Status Alumni</h1>
        <form action="{{ route('status-alumni.update', $status_alumni->id_status_alumni) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{ $status_alumni->status }}" required>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>
