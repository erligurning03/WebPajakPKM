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
        return view('kuis.kuisSoal', compact('tampil' ,'id'));
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

        return view('kuis.kuisHasil', compact('tampil','id'), [
            'score' => $score,
            'correctAnswers' => $correctAnswers,
            'explanations' => $explanations,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function createLevel(array $kuislevel)
    {
        return KuisLevel::create([
            'nama_kuis' => $kuislevel['nama_kuis'],
            'waktu_kuis' => $kuislevel['waktu_kuis'],
        ]);
    }

    public function createSoal(array $kuissoal)
    {
        return KuisSoal::create([
            'no_soal' => $kuissoal['no_soal'],
            'isi_soal' => $kuissoal['isi_soal'],
            'jawaban_soal' => $kuissoal['jawaban_soal'],
            'pembahasan_soal' => $kuissoal['pembahasan_soal'],
            'id_kuis' => $kuissoal['id_kuis'],
        ]);
    }

    public function createJawaban(array $kuisjawaban)
    {
        return KuisJawaban::create([
            'id_soal' => $kuisjawaban['id_soal'],
            'opsi_jawaban' => $kuisjawaban['opsi_jawaban'],
            'isi_jawaban' => $kuisjawaban['isi_jawaban'],
        ]);
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
