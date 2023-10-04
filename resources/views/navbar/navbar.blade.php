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
    <nav class="navbarbro">
        <h1 class="logo">LOGO RUJAK</h1>
        <ul class="desktop-list">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Kuis</a></li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Profil</a></li>
        </ul>
        <ul class="mobile-list">
            <li><i class="fa-solid fa-house"></i></li>
            <li><i class="fa-solid fa-puzzle-piece"></i></li>
            <li><i class="fa-solid fa-circle-question"></i></li>
            {{-- <li><i class="fa-regular fa-handshake"></i></li> --}}
            <li><i class="fa-solid fa-handshake"></i></li>
            {{-- <li><i class="fa-regular fa-user"></i></li> --}}
            <li><i class="fa-solid fa-user"></i></li>
        </ul>
    </nav>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md">
          <div class="gambar-slide">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                      <img src="{{asset('img/img2.png')}}" class="d-block w-100 img-fluid" alt="..." >
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                      <img src="{{asset('img/img5.png')}}" class="d-block w-100 img-fluid" alt="img1">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                      <img src="{{asset('img/img3.jpg')}}" class="d-block w-100 img-fluid" alt="..." >
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <h2>Podcast Rujak</h2>
        <div class="col-md-3">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- podcast rujak --}}
      <div class="row">
        <h1><b>Podcast RUJAK</b></h1>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Apa itu pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast1.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">jenis-jenis pajak</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast3.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">dirjen pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- berita rujak --}}
      <div class="row">
        <h1><b>Berita RUJAK</b></h1>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Apa itu pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast1.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">jenis-jenis pajak</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast3.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">dirjen pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- baris video pembelajaran rujak --}}
      <div class="row">
        <h1><b>Tontonan RUJAK</b></h1>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Apa itu pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast1.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">jenis-jenis pajak</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="{{asset('img/podcast3.jpg')}}" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">dirjen pajak ?</h5>
              {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
          </div>
        </div>
      </div>

      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>