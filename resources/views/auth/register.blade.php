<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #b0b0b0; /* Mengubah background menjadi abu-abu */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.8); /* Mengubah transparansi menjadi lebih gelap */
            backdrop-filter: blur(10px);
            width: 360px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #333; /* Mengubah warna teks menjadi lebih gelap agar kontras */
        }

        .register-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .register-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            background: rgba(0, 0, 0, 0.1); /* Ubah warna latar input */
            color: #333; /* Mengubah warna teks input */
            outline: none;
        }

        .register-container input::placeholder {
            color: rgba(0, 0, 0, 0.6); /* Menyesuaikan warna placeholder */
        }

        .register-container button {
            background: #6c6c6c; /* Ubah warna tombol menjadi abu-abu */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: 0.3s;
        }

        .register-container button:hover {
            background: #565656; /* Efek hover menjadi lebih gelap */
            transform: scale(1.05);
        }

        .show-password {
            display: flex;
            align-items: center;
            font-size: 12px;
            justify-content: flex-end;
            margin-top: -5px;
        }

        .extra-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .extra-links a {
            color: #6c6c6c; /* Menyesuaikan warna link dengan warna tombol */
            text-decoration: none;
            font-weight: bold;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create Account</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <div class="show-password">
                <label>
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
            </div>
            <button type="submit">Register</button>
        </form>
        <div class="extra-links">
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[name="password"]');
            const confirmPasswordField = document.querySelector('input[name="password_confirmation"]');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            confirmPasswordField.type = type;
        }
    </script>
</body>
</html>
