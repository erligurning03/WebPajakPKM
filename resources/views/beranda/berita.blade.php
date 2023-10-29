@extends('layouts.navbar')
@section('container')

<div class="row">
    <form action="/index/berita">
        <button type="submit" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
        </form>
    @foreach ($listKonten as $konten)
    <h1><b>{{ Str::title($konten->judul_konten) }}</b></h1>
    <h6>16/9/2023, 12.00 WIB</h6>
    <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
            <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top img-fluid" alt="..." style="width: 100%; display:block;">
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
        <div class="isi-konten">
            <p> {{$konten->deskripsi_konten}} </p>
        </div>
    </div>
    @endforeach

</div>


@endsection
