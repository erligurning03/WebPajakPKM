@extends('layouts.navbar')
@section('container')

<div class="container text-left">
    <div class="row justify-content-left">

        <div class="card mt-4" style="">
            @foreach ($level as $data1)
            <div class="d-flex justify-content-center">
                <div class="row">
                    <h3>{{$data1->nama_kuis}}</h3>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <div id="timer" class="row">
                    <h4><span id="minutes">00</span>:<span id="seconds">00</span></h4>
                </div>
            </div>
            @endforeach

            <form id="kuis-form" action="/kuis/{{ $id }}/proseskuis" method="post" enctype="multipart/form-data">
                @csrf
                @foreach ($tampil as $data)
                <div class="card-body">
                    <div class="card-title">{{ $data->no_soal }}. {{ $data->isi_soal }}</div>
                    @foreach ($data->kuisJawaban as $Jawaban)
                    <div class="card-body">
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="{{ $Jawaban->opsi_jawaban }}">
                            {{ $Jawaban->opsi_jawaban }}. {{ $Jawaban->isi_jawaban }}
                        </label>
                    </div>
                    @endforeach
                </div>
                @endforeach
                <button class="btn btn-primary" type="submit">Submit</button>
                @foreach ($level as $data1)
                <script>
                    // Set the timer duration (in seconds)
                    const timerDuration = {{$data1->waktu_kuis}}*60; // 10 minutes (adjust as needed)

                    // Function to start the timer
                    function startTimer(duration, display) {
                        let timer = duration, minutes, seconds;
                        const countdown = setInterval(function () {
                            minutes = parseInt(timer / 60, 10);
                            seconds = parseInt(timer % 60, 10);

                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;

                            display.textContent = minutes + ":" + seconds;

                            if (--timer < 0) {
                                clearInterval(countdown);
                                // Optionally, you can submit the form when the timer expires
                                document.getElementById('kuis-form').submit();
                            }
                        }, 1000);
                    }

                    // Start the timer when the page loads
                    document.addEventListener("DOMContentLoaded", function () {
                        const display = document.getElementById('timer');
                        startTimer(timerDuration, display);
                    });
                </script>
                @endforeach
            </form>
        </div>
    </div>
</div>



@endsection
