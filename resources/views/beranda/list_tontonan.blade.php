@extends('layouts.navbar')
@section('container')

{{-- tontonan rujak --}}
<div class="row">
    <button type="button" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
    <h1><b>Tontonan RUJAK</b></h1>
    <div class="input-group mb-4 mt-5">
      <span class="input-group-text" id="basic-addon1" style="cursor: pointer;" onclick="#"><i class="bi bi-search"></i></span>
      <input type="text" class="form-control" placeholder="Mau nonton apa hari ini ?" aria-label="Cari" aria-describedby="basic-addon1" id="search-input" style="width:60px;">
    </div>
    <div class="col-sm-4 col-md-4 ">
      <div class="card mb-3">
        <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Apa itu pajak ?</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 ">
        <div class="card mb-3">
          <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Apa itu pajak ?</h5>
            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
          </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 ">
      <div class="card mb-3">
        <img src="{{asset('img/podcast2.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Apa itu pajak ?</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
  </div>
    <div class="col-sm-4 col-md-4 ">
      <div class="card mb-3">
        <img src="{{asset('img/podcast1.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">jenis-jenis pajak</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 ">
      <div class="card mb-3">
        <img src="{{asset('img/podcast1.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">jenis-jenis pajak</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 ">
      <div class="card mb-3">
        <img src="{{asset('img/podcast3.jpg')}}" class="card-img-top rounded-circle img-fluid" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">dirjen pajak ?</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
  </div>

@endsection
