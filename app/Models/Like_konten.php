<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Like_konten extends Model
{
    protected $table = 'like_kontens';
    protected $fillable = [
        'konten_id',
        'disukai_oleh',
    ];
}
