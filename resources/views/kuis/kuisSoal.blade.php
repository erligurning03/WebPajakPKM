@extends('layouts.navbar')
@section('container')

<div class="container text-left">
    <div class="row justify-content-left">
        <div class="col-6 border border-5 bg-warning">
            <h2><a href="#"><strong>LEVEL</strong></a></h2>
        </div>
        <div class="col-6 border border-5 bg-warning">
            <h2><a href=""><strong>PEMENANG</strong></a></h2>
        </div>

        <div class="card mt-4" style="">
            @foreach ($tampil as $data)
            <div class="card-body">
                <div class="card-title"> {{ $data->no_soal }}. {{ $data->isi_soal }}</div>
                @foreach ($data->kuisJawaban as $Jawaban)
                <div class="card-body"> {{ $Jawaban->opsi_jawaban }}. {{ $Jawaban->isi_jawaban }}</div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
