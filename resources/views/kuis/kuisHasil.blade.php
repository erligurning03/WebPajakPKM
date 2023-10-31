@extends('layouts.navbar')
@section('container')

<div class="container text-left">
    <div class="row justify-content-left">

        <div class="card mt-4" style="">
            {{-- <form action="/kuis/{{ $id }}/proseskuis" method="post" enctype="multipart/form-data">
                @csrf --}}
                @foreach ($tampil as $data)
                    <div class="card-body">
                        <h5><div class="">{{ $data->no_soal }}. {{ $data->isi_soal }}</div></h5>
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
            {{-- </form> --}}
        </div>
    </div>
</div>



@endsection
