@extends('layouts.navbar')
@section('container')

<style>
    .container {
        position: center;

        max-width: 800px;
        width: 100%;
        border-radius: 15px;

        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
            border-radius: 12px;
        }

        /* .center {
                padding: 8px 8px;
                text-align: left;
            } */

        .bord {
            border: 1px solid black;
            border-radius: 12px;
            padding: 5px;
        }
    }
</style>

<div class="container mt-1">
    <div class="row justify-content-center">

        <div class="card-body mt-2">
            <div class="card mt-5" style="">
                @foreach ($level as $data1)
                <div class="card-head mt-2">
                    <div class="d-flex justify-content-center mt-2">
                        <div class="row">
                            <h3>{{$data1->nama_kuis}}</h3>
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach ($tampil as $data)

                <div class="card bg-light border-dark mb-3" style="width: 98%;">
                    <div class="card-header ">
                        <h5 style="margin: auto" class="">{{ $data->no_soal }}. {{ $data->isi_soal }}</h5>
                    </div>
                    <div class="card-body text-dark">

                        @foreach ($data->kuisJawaban as $Jawaban)
                        <div>
                            <label>
                                {{-- <input type="radio" name="answers[{{ $data->id }}]"
                                    value="{{ $Jawaban->opsi_jawaban }}"> --}}
                                {{ $Jawaban->opsi_jawaban }}. {{ $Jawaban->isi_jawaban }}
                            </label>

                        </div><br>
                        @endforeach
                        <div class="bord">
                            <h6>
                                Jawabannya ialah {{ $correctAnswers[$data->no_soal] }}. {{ $explanations[$data->no_soal]
                                }}
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
                <h3>anda benar {{$score}}</h3>
            </div>
        </div>
    </div>
</div>


@endsection
