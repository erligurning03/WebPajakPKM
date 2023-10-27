<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Komentar_konten extends Model
{

    protected $table = 'komentar_kontens';
    protected $fillable = [
        'konten_id',
        'dikomentari_oleh',
        'isi_komentar,'
    ];
}
