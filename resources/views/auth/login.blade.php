<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e90ff, #00bfff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .login-container {
            background: #fff;
            color: #333;
            width: 350px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #1e90ff;
            font-weight: bold;
        }

        .login-container input {
            width: calc(100% - 20px);
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-container button {
            background: #1e90ff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background 0.3s;
        }

        .login-container button:hover {
            background: #006bb3;
        }

        .login-container p {
            margin: 20px 0;
            font-size: 14px;
            color: #666;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 15px 0;
        }

        .social-login img {
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .social-login img:hover {
            transform: scale(1.1);
        }

        .login-container .extra-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-container .extra-links a {
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container .extra-links a:hover {
            text-decoration: underline;
        }

        .show-password {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            font-size: 14px;
            margin-top: -8px;
        }

        .show-password input {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="show-password">
                <label>
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[name="password"]');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>

</html>
