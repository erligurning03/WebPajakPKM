<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kontens';

    protected $fillable = [
        'cover_konten',
        'judul_konten',
        'url_konten',
        'deskripsi_konten',
        'tipe_konten_id',
        'diupload_oleh',
    ];
}
