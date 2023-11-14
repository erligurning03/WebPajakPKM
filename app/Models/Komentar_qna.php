<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar_qna extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_qna', 'user_id','isi_komentar'];

    protected $table = 'komentar_qnas';

    // public function qna()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // } //dibuat oleh gery
    
    
    public function qna() {
        return $this->belongsTo(Qna::class, 'id_qna');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
