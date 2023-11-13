@extends('layouts.navbar')
@section('container')

<div class="container mt-4">
    {{-- <form class="d-flex" action="">
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form> --}}
  {{-- konten video --}}

  {{-- <div class="row">
    <div class="col-md-12">
      <div class="embed-responsive embed-responsive-16by9">
          <video controls>
            <source src="{{asset('video/dumping.MP4')}}" type="video/mp4">
          </video>
          <hr size="5px" width="100%" align="center">
          <h2>Apasih Pajak Itu ?</h2>
          <h6>Kita akan belajar mengenai pajak dan jenis-jenis pajak pada video ini. jadi tetap disimak ya!</h6>
      </div>
    </div>
  </div> --}}
  <form action="/index/tontonan">
    <button type="submit" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
    </form>
  <div class="row">
    @foreach ($listKonten as $konten)
    <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9 mt-3">
            <video class="embed-responsive-item" width= "50%"controls>
                <source src="{{ $konten->url_konten }}" type="video/mp4">
            </video>
        </div>
        <hr size="5px" width="100%" align="center">
        <div class="row">
          <div class="col-6 col-md-6" style="text-align:left">
            <i class="far fa-heart fa-xl love-icon action-icon"></i>
            <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>
            <b>100</b>
          </div>
          <div class="col-6 col-md-6" style="text-align: right">
            {{-- <i class="fa-regular fa-share-from-square"></i> --}}
            <i class="fa-solid fa-share-from-square"></i>
            <b>78</b>
          </div>
        </div>

        <h2>{{ Str::title($konten->judul_konten) }}</h2>
        <p>{{$konten->deskripsi_konten}} </p>
    </div>
    @endforeach
</div>

</div>
{{-- end of search --}}

@endsection
