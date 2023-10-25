<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuisJawaban extends Model
{
    protected $table = 'kuis_jawaban';

    protected $fillable = [
        'id_soal',
        'opsi_jawaban',
        'isi_jawaban',
    ];

    public function kuisSoal()
    {
        return $this->belongsTo(KuisSoal::class, 'id_soal');
    }
}
