<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>RUJAK - Ruang Pajak</title>
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"> --}}

    <!-- font awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Lato -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!-- icon bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" rel="stylesheet">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    <nav class="navbarbro fixed-top">
      <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak" style="max-width: 100%; height: auto; width: 60px;">
        <h1 class="logo">RUJAK</h1>
        <ul class="desktop-list">
            <li><a href="{{ url('beranda') }}">Beranda</a></li>
            <li><a href="{{ url('kuis') }}">Kuis</></li>
            <li><a href="{{ url('qna') }}">Q&A</a></li>
            <li><a href="{{ url('layanan') }}">Layanan</a></li>
            <li><a href="{{ url('profil') }}">Profil</a></li>
            <li><form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
          </form></li>
        </ul>
        <ul class="mobile-list">
            <li><a href="{{ url('beranda') }}"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="{{ url('kuis') }}"><i class="fa-solid fa-puzzle-piece"></i></a></li>
            <li><a href="{{ url('qna') }}"><i class="fa-solid fa-circle-question"></i></a></li>
            {{-- <li><i class="fa-regular fa-handshake"></i></li> --}}
            <li><a href="{{ url('layanan') }}"><i class="fa-solid fa-handshake"></i></a></li>
            {{-- <li><i class="fa-regular fa-user"></i></li> --}}
            <li><a href="{{ url('profil') }}"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
    <div class="container mt-4" style="padding-top:50px; margin-bottom:70px;">

      @yield('container')
      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>