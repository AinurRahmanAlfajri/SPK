<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"],
        .login-container .btn-register {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .login-container input[type="submit"]:hover,
        .login-container .btn-register:hover {
            background-color: #45a049;
        }

        .login-container .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .login-container .forgot-password a {
            color: #777;
            text-decoration: none;
        }

        .login-container .forgot-password a:hover {
            text-decoration: underline;
        }

        .reset-password-container {
            display: none;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .reset-password-container h2 {
            text-align: center;
            color: #333;
        }

        .reset-password-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .reset-password-container .btn-reset {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .reset-password-container .btn-reset:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function showResetPasswordForm() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("reset-password-form").style.display = "block";
        }

        function showLoginForm() {
            document.getElementById("reset-password-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
        }
    </script>
</head>
<body>
    <div class="login-container" id="login-form">
        <h2>Login</h2>
        <form action="/submit-login" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            
        </form>
        
    </div>

    <div class="reset-password-container" id="reset-password-form">
        <h2>Reset Password</h2>
        <form action="/reset-password" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="new-password" placeholder="New Password" required>
            <input type="password" name="confirm-password" placeholder="Confirm New Password" required>
            <input type="submit" class="btn-reset" value="Reset Password">
            <div class="forgot-password">
                <a href="#" onclick="showLoginForm()">Back to Login</a>
            </div>
            <div class="forgot-password">
                <a href="#" onclick="showResetPasswordForm()">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
</html>
