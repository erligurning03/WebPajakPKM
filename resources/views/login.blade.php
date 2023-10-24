<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="{{ asset('css/login1.css') }}">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Masuk</header>
            <div class="welcome">
                <p>Selamat Datang Sobat Rujak!</p>
            </div>
            <div class="logo">
                <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
            </div>
            <form action="#">
                <input type="text" placeholder="Input Email">
                <input type="password" placeholder="Input Password">
                <a href="{{ route('lupa-password') }}">Lupa password?</a>
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Belum Punya Akun?
                    <label for="check">Daftar</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Daftar</header>
            <div class="logo">
                <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
            </div>
            <form action="#">
                <input type="text" placeholder="Input Email">
                <input type="password" placeholder="Buat Password">
                <input type="password" placeholder="Konfirmasi Password">
                <input type="button" class="button" value="Daftar">
            </form>
            <div class="signup">
                <span class="signup">Sudah Punya Akun?
                    <label for="check">Masuk</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>
