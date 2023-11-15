<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Qna extends Model
{
    use HasFactory;
    protected $fillable = ['id', 
    'user_id',
    'isi_pertanyaan', 
    'jumlah_like', 
    'jumlah_komentar', 
    'jumlah_share',
    'tanggal_upload'];

    protected $table = 'qnas';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id'); //id disini adalah nama kolom pada tabel user yang berelasi ke tabel qna ini
    }


    public function komentar()
    {
        return $this->hasMany(Komentar_qna::class, 'user_id');//dikomentari oleh user x dengan kunci user_id pada tabel qna
    }

    
    public function like_qna()
    {
        return $this->hasMany(Like_qna::class, 'user_id');
    }

    public function isLikedByUser()
    {
        $userEmail = Auth()->user()->email;

        return Like_qna::where('id_qna', $this->id)
            ->where('email', $userEmail)
            ->exists();
    }

}
