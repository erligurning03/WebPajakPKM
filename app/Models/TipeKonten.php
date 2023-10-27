<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeKonten extends Model
{
    protected $table = 'tipe_konten';

    protected $fillable = [
        'tipe_konten',
        'created_at',
        'updated_at',
    ];
}
