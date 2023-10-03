<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/lupapass.css') }}">
</head>
<body>
    <div class="container">
        <input type="hidden" id="check">
        <!-- Tampilan Lupa Password -->
        <div class="forgot-password form">
            <header>Lupa Password</header>
            <div class="logo">
                <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
            </div>
            <form action="#">
                <input type="password" placeholder="Password Lama">
                <input type="password" placeholder="Password Baru">
                <input type="button" class="button" value="Reset Password">
            </form>
        </div>
        <!-- Akhir Tampilan Lupa Password -->
    </div>
</body>
</html>
