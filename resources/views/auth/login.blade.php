<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4A90E2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 500px; /* Lebarkan container */
        }
        .login-container img {
            width: 180px; /* Perbesar logo */
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 8px;
            font-size: 16px;
            padding: 12px;
        }
        .btn-login {
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #357ABD;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h3 class="mb-3">ADMIN LOGIN</h3>
    
    <!-- Logo -->
    <img src="/img/logo.png" alt="Logo">
    
    <!-- Form -->
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn-login">LOGIN</button>
    </form>

    <p class="mt-3"><a href="#">Forgot password?</a></p>
</div>

</body>
</html>
