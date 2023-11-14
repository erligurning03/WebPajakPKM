@extends('layouts.navbar')
@section('container')

<div class="container">
    <div class="row">
        <form action="/index">
        <button type="submit" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
        </form>
        <div class="input-group mb-4 mt-3">
            <span class="input-group-text" id="basic-addon1" style="cursor: pointer;" onclick="#"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Mau baca apa hari ini ?..." aria-label="Cari" aria-describedby="basic-addon1" id="search-input" style="width:60px;">
        </div>
        @foreach ($listKonten as $konten)
        <div class="col-sm-4 col-md-4 ">
            <div class="card mb-3">
                <a href="/index/berita/{{$konten->id}}" style="color: black">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{$konten->url_konten}}" class="d-block w-100 img-fluid" alt="..." >
                    </div>
                    <div class="col-md-6">
                        <b>{{ Str::title($konten->judul_konten) }}</b>
                        <h9><br> {{ Str::limit($konten->deskripsi_konten, 50) }} </h9>
                        <div class="col-md-6">
                            {{-- <br><button style="font-weight: 300" type="submit" class="btn btn-primary">Check</button> --}}
                        </div>
                   </div>

                </div>
            </a>
            </div>
        </div>
        @endforeach



    </div>
</div>

@endsection
