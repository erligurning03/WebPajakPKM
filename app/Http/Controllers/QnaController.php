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
        $createdDates = $qnas->map(function ($qna) {
            return Carbon::parse($qna->created_at);
        });
        // $komentar_qnas = Komentar_qna::with('qna')
        // ->where();
        $like_qnas = Like_qna::all();
        return view('qna.qna2', compact('qnas', 'users', 'createdDates'));
    }

    // public function toggleLike($postId)
    // {
    //     $userNik = Auth::user()->nik;

    //     // Periksa apakah data like_post ada berdasarkan id_post dan nik
    //     $liked = LikePost::where('id_post', $postId)
    //         ->where('nik', $userNik)
    //         ->exists();

    //     // Periksa apakah data post ada berdasarkan id_post
    //     $post = Post::find($postId);

    //     if ($liked) {
    //         // Jika sudah ada like, hapus like_post dan kurangi jumlah_like di tabel post
    //         LikePost::where('id_post', $postId)
    //             ->where('nik', $userNik)
    //             ->delete();

    //         $post->decrement('jumlah_like');
    //     } else {
    //         // Jika belum ada like, tambahkan like_post dan tambahkan jumlah_like di tabel post
    //         LikePost::create([
    //             'id_post' => $postId,
    //             'nik' => $userNik,
    //         ]);

    //         $post->increment('jumlah_like');
    //     }

    //     return redirect()->back()->withFragment('post-' . $postId);
    // }

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
}
