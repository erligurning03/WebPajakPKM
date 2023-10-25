<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuisSoal extends Model
{
    protected $table = 'kuis_soal';

    protected $fillable = [
        'no_soal',
        'isi_soal',
        'jawaban_soal',
        'pembahasan_soal',
        'id_kuis',
    ];

    public function kuisLevel()
    {
        return $this->belongsTo(KuisLevel::class, 'id_kuis');
        return $this->hasMany(KuisJawaban::class, 'id_soal');
    }
}
