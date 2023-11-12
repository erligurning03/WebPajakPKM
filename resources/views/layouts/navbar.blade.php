<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RUJAK - Ruang Pajak</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"> --}}

    <!-- font awesome untuk icon -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}">
    <!-- Font Lato -->
    <link href='{{ asset('https://fonts.googleapis.com/css?family=Lato') }}' rel='stylesheet'>
    <!-- icon bootstrap -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css') }}" rel="stylesheet">
    <style>
        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        float: left;
        display: none;
        right: 0.75rem;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }
    </style>
    @yield('css')
  </head>
  <body>
    <nav class="navbarbro fixed-top" style="margin: auto">
      <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak" style="max-width: 100%; height: auto; width: 60px;">
        <h1 class="logo">RUJAK</h1>
        <ul class="desktop-list">
            <li><a href="{{ url('/') }}">BERANDA</a></li>
            <li><a href="{{ url('kuis') }}">KUIS</></li>
            <li><a href="{{ url('qna') }}">Q & A</a></li>
            <li><a href="{{ url('layanan') }}">LAYANAN</a></li>
            @php
            $user = \App\Models\User::where('name', Auth::user()->name)->first();
            @endphp
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link" style="color: white" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ substr($user->name,0,8) }}</a>
                            <!-- Dropdown - User Information -->
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{ route('profil') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                     </a>
                <div class="dropdown-divider dropdown-menu dropdown-menu-right shadow animated--grow-in"></div>
                <a class="dropdown-item" href="{{ url('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
             </div>

         </li>
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
