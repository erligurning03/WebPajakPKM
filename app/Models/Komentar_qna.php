<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar_qna extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'id_qna', 'user_id','isi_komentar'];

    protected $table = 'komentar_qnas';

    public function qna()
    {
        return $this->belongsTo(Qna::class, 'id');
    }
}
