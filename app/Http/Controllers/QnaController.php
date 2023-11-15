<?php

namespace App\Http\Controllers;

use App\Models\Komentar_qna;
use App\Models\Like_qna;
use App\Models\Qna;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QnaController extends Controller
{
    //read data
    public function index(){
        // $qnas = DB::table('qnas')->get();
        // dd('qnas');
        // return view('qna.qna2', compact('qnas'));

        $qnas = Qna::with('like_qna')->with('komentar')->get();
        // dd($qnas);
        $users = User::all();
        // dd($users);
        $createdDates = $qnas->map(function ($qna) {
            return Carbon::parse($qna->created_at);
        });
        $komentar_qnas = Komentar_qna::with('qna')->with('user');//nambah untuk display komentar jg
        //->where('id', );

        $like_qnas = Like_qna::all();
        return view('qna.qna2', compact('qnas', 'users', 'createdDates','komentar_qnas'));
    }

    public function store(Request $request){
        // dd('submit');
        // DB::table('qnas')->insert([
        //     'user_id' => Auth::user()->id,
        //     'isi_pertanyaan'=> $request->pertanyaan,
        //     'jumlah_like'=>0,
        //     'jumlah_komentar'=>0,
        //     'jumlah_share'=>0,

        // ]);
        $insertQna = new Qna([
            'user_id' => Auth()->id(),
            'isi_pertanyaan'=> $request->pertanyaan,
            'jumlah_like'=>0,
            'jumlah_komentar'=>0,
            'jumlah_share'=>0,
        ]);
        $insertQna -> save();
        return redirect()->back()->with('success', 'pertanyaan berhasil ditambahkan.');

        // dd('user_id');

        // $request->validate([
        //     'isi_pertanyaan' => 'required',
        // ]);

        // $qnas = new Qna();
        // // $qnas->user_id = auth()->user()->;
        // $qnas->id = Auth::user()->id;
        // $qnas->isi_pertanyaan = $request->input('pertanyaan');
        // $qnas->jumlah_like = 0;
        // $qnas->jumlah_komentar = 0;
        // $qnas->jumlah_share =0;
        // $qnas->save();

        //return redirect()->back()->with('success', 'pertanyaan berhasil ditambahkan.');
        // session()->flash("post_success", "Post berhasil ditambahkan.");
        //return redirect()->back();
    }

    public function komenqna(Request $request, $id)
    {
        // dd($request->all());
        // dd($request->input('isi_komentar'));
        $sessionId = auth()->id();
        // dd($sessionId);
        // Create a new Komentar instance
        $komentarQna = new Komentar_qna([
            'id_qna' => $id,
            'user_id' => $sessionId,
            'isi_komentar' => $request->input('isi_komentar'),
        ]);
        $komentarQna->save();
        // return redirect("/komentar-qna/{$id}")->with('success', 'komentar berhasil ditambahkan');
        // return redirect()->back()->with('success', 'pertanyaan berhasil ditambahkan.');
        // return redirect()->back()->withInput()->with('success', 'pertanyaan berhasil ditambahkan.');
        return redirect()->back()->withInput()->with('success', 'pertanyaan berhasil ditambahkan.')->with('id_qna', $id);

    }
}
