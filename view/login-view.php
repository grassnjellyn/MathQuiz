<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tambahkan CSS styling sesuai kebutuhan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter Username" name="txtUsername" autofocus required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password" name="txtPassword" required>
        </div>
        <button type="submit" id="btnLogin" name="btnLogin">Login</button>
    </form>
</div>

</body>
</html>