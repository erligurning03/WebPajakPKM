@extends('layouts.navbar')
@section('container')


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
                @foreach ($listKonten->where('tipe_konten_id', 1)->take(1) as $konten)
                <div class="carousel-item active" data-bs-interval="2000">
                    <a href="/index/berita/{{$konten->id}}" style="color: black">
                  <img src="{{$konten->url_konten}}" class="d-block w-100 img-fluid" alt="..." >
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{Str::title($konten->judul_konten)}}</h5>
                </a>
                </div>
                </div>
                @endforeach
                @foreach ($listKonten->where('tipe_konten_id', 1)->slice(1,2) as $konten)
                <div class="carousel-item" data-bs-interval="2000">
                    <a href="/index/berita/{{$konten->id}}" style="color: black">
                  <img src="{{$konten->url_konten}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{Str::title($konten->judul_konten)}}</h5>
                </a>
                  </div>
                </div>
                @endforeach
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
</div>

    {{-- baris video pembelajaran rujak --}}
    <div class="row">
        <h1><b>Tontonan RUJAK</b></h1>
        @foreach ($listKonten->where('tipe_konten_id', 3)->take(3) as $konten)
        <div class="col-md-4">
            <a href="/index/tontonan/{{$konten->id}}" style="color: black">
            <div class="card mb-3">
            <img src="{{$konten->cover_konten}}" width="200" height="200" class="card-img-top  img-fluid" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">{{$konten->judul_konten}}</h5>
                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            </div>
            </div>
            </a>
        </div>
        @endforeach
        <form action="/index/tontonan">
            <button type="submit" class="btn btn-warning" style="width: 100%">Semua Tontonan &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
            </form>
    </div>

{{-- podcast rujak --}}
  <div class="row">
    <h1><b>Podcast RUJAK</b></h1>
    @foreach ($listKonten->where('tipe_konten_id', 2)->take(3) as $konten)
    <div class="col-md-4">
    <a href="{{ URL::to('index/podcast/'.$konten->id) }} " style="color: black">
      <div class="card mb-3">
        <img src="{{$konten->cover_konten,2}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">{{$konten->judul_konten}}</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </a>
    </div>
    @endforeach
    <form action="/index/podcast">
        <button type="submit" class="btn btn-warning" style="width: 100%">Semua Podcast &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
        </form>
  </div>
  {{-- berita rujak --}}
  <div class="row">
    <h1><b>Berita RUJAK</b></h1>
    @foreach ($listKonten->where('tipe_konten_id', 1)->take(3) as $konten)
    <div class="col-md-4">
        <a href="/index/berita/{{$konten->id}}" style="color: black">
      <div class="card mb-3">
        <img src="{{$konten->cover_konten,1}}" class="card-img-top  img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">{{Str::title($konten->judul_konten)}}</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </a>
    </div>
    @endforeach
    <form action="/index/berita">
    <button type="submit" class="btn btn-warning" style="width: 100%">Semua Berita &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    </form>
  </div>




      @endsection
