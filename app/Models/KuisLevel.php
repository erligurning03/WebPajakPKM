<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuisLevel extends Model
{
    protected $table = 'kuis_level';

    protected $fillable = [
        'nama_kuis',
        'waktu_kuis',
    ];

    public function kuisSoal()
    {
        return $this->hasMany(KuisSoal::class, 'id_kuis');
    }
}
