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
            <form action="/kuis/{{ $id }}/proseskuis" method="post" enctype="multipart/form-data">
                @csrf
                @foreach ($tampil as $data)
                    <div class="card-body">
                        <div class="card-title">{{ $data->no_soal }}. {{ $data->isi_soal }}</div>
                        @foreach ($data->kuisJawaban as $Jawaban)
                            <div class="card-body">
                                <label>
                                    {{-- <input type="radio" name="answers[{{ $data->id }}]" value="{{ $Jawaban->opsi_jawaban }}"> --}}
                                    {{ $Jawaban->opsi_jawaban }}. {{ $Jawaban->isi_jawaban }}
                                </label>
                            </div>
                        @endforeach
                        <h6>
                            Jawabannya ialah {{ $correctAnswers[$data->no_soal] }}. {{ $explanations[$data->no_soal] }}
                        </h6>
                    </div>
                @endforeach
                    <h3>anda benar {{$score}}</h3>
            </form>
        </div>
    </div>
</div>



@endsection
