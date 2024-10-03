<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        /* Modern Styling */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #56baed, #36d7b7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            text-align: center;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }

        .login-container input[type="text"], .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .login-container input[type="text"]:focus, .login-container input[type="password"]:focus {
            border-color: #36d7b7;
            outline: none;
        }

        .login-container input[type="submit"] {
            background: #36d7b7;
            border: none;
            color: #fff;
            padding: 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-container input[type="submit"]:hover {
            background: #2a9d8f;
        }

        .login-container a {
            color: #36d7b7;
            text-decoration: none;
            font-size: 14px;
            margin-top: 15px;
            display: inline-block;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
            }

            .login-container input[type="text"], .login-container input[type="password"] {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img width="120" height="100" src="https://img.icons8.com/plasticine/100/login-rounded-right.png" alt="login-rounded-right"/>
        <h2>Login</h2>
        <form action="{{ route('dologin') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log In">
        </form>
        <!-- Uncomment if needed -->
        <!-- <a href="#">Forgot Password?</a> -->
    </div>
</body>
</html>
