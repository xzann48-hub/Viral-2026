<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login Belajar</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f0f2f5; }
        .login-box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; margin-bottom: 10px; padding: 10px; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px; }
        button { width: 100%; padding: 10px; background: #1877f2; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3 style="color: #1877f2; text-align: center;">Login</h3>
        <form action="proses.php" method="POST">
            <input type="text" name="username" placeholder="Email atau Nomor Ponsel" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
