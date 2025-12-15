<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            background: #8eaeddff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #d0c2cfff;
            width: 360px;
            padding: 35px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-box img {
            width: 80px;
            margin-bottom: 15px;
        }

        .login-box h2 {
            font-size: 20px;
            margin-bottom: 8px;
            color: #1381b4ff;
        }

        .login-box p {
            font-size: 14px;
            color: gray;
            margin-bottom: 25px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #952222ff;
            font-size: 15px;
        }

        .login-box button {
            width: 300px;
            padding: 12px;
            background: #5f1da6ff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
        }

        .login-box button:hover {
            background: #14285f;
        }

    </style>
</head>
<body>

    <div class="login-box">
        <img src="Screenshot 2025-12-09 205239.png">


        <h2>Admin Panel</h2>
        <p>Sign in with your admin Information</p>

    <form method="post" action="Loginvalidation.php">
    <input type="text" name="adminID" placeholder="Admin ID">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Log In</button>

    </form>

    </div>

</body>
</html>
