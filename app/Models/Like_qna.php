<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like_qna extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_qna', 'user_id'];
    protected $table ='like_qnas';
    
    public function qna()
    {
        return $this->belongsTo(Qna::class, 'id');
    }
}
