<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KuisLevel;
use App\Models\KuisJawaban;
use App\Models\KuisSoal;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilLevel()
    {
        $tampil = KuisLevel::SELECT('nama_kuis', 'waktu_kuis', 'id')->get();
        return view('kuis.kuisLevel', compact('tampil'));
    }

    public function tampilSoal($id)
    {
        $tampil = KuisSoal::with('kuisJawaban')->where('id_kuis', $id)->get();
        $level = KuisLevel::SELECT('nama_kuis', 'waktu_kuis')->where('id', $id)->get();
        // dd($level);
        return view('kuis.kuisSoal', compact('tampil', 'id', 'level'));
    }


    public function prosesKuis(Request $request, $id)
    {
        // dd($request);
        $tampil = KuisSoal::with('kuisJawaban')->where('id_kuis', $id)->get();
        $userAnswers = $request->input('answers');
        $quizId = $id;

        $questions = KuisSoal::where('id_kuis', $quizId)->get();

        $score = 0;
        $correctAnswers = [];
        $explanations = [];

        foreach ($questions as $question) {
            $questionNumber = $question->no_soal;
            $correctAnswer = $question->jawaban_soal;
            $userAnswer = $userAnswers[$question->id];

            if ($userAnswer === $correctAnswer) {
                $score++;
            }

            $correctAnswers[$questionNumber] = $correctAnswer;
            $explanations[$questionNumber] = $question->pembahasan_soal;
        }

        return view('kuis.kuisHasil', compact('tampil', 'id'), [
            'score' => $score,
            'correctAnswers' => $correctAnswers,
            'explanations' => $explanations,
        ]);
    }


    public function createKuis(Request $request)
    {
        // Validate and save the Kuis Level
        $kuisLevel = KuisLevel::create([
            'nama_kuis' => $request->input('nama_kuis'),
            'waktu_kuis' => $request->input('waktu_kuis'),
        ]);

        // Validate and save the Kuis Soal
        $questionsData = $request->input('questions'); // An array of questions data

        foreach ($questionsData as $questionData) {
            $kuisSoal = new KuisSoal([
                'no_soal' => $questionData['no_soal'],
                'isi_soal' => $questionData['isi_soal'],
                'jawaban_soal' => $questionData['jawaban_soal'],
                'pembahasan_soal' => $questionData['pembahasan_soal'],
            ]);

            $kuisLevel->kuisSoal()->save($kuisSoal);

            // Validate and save Kuis Jawaban for each question
            $answersData = $questionData['answers']; // An array of answers data

            foreach ($answersData as $answerData) {
                $kuisJawaban = new KuisJawaban([
                    'opsi_jawaban' => $answerData['opsi_jawaban'],
                    'isi_jawaban' => $answerData['isi_jawaban'],
                ]);

                $kuisSoal->kuisJawaban()->save($kuisJawaban);
            }
        }

        // Redirect or return a response as needed
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
