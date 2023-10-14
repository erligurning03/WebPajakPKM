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
  <video controls>
    <source src="{{asset('video/dumping.MP4')}}" type="video/mp4">
  </video>
  <h2>Apasih Pajak Itu ?</h2>
  <h6>Kita akan belajar mengenai pajak dan jenis-jenis pajak pada video ini. jadi tetap disimak ya!</h6>
</div>
{{-- end of search --}}

@endsection