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

    public function UploadedBy() {
        return $this->hasOne(User::class,'id','diupload_oleh');
    }

    public function TipeKonten() {
        return $this->hasOne(TipeKonten::class,'id','tipe_konten_id');
    }

    public function KomentarKonten() {
        return $this->hasMany(Komentar_konten::class, 'konten_id', 'id');
    }
    public function LikeKonten() {
        return $this->hasMany(Like_konten::class, 'konten_id', 'id');
    }
    public function ShareKonten() {
        return $this->hasMany(Share_konten::class, 'konten_id', 'id');
    }
}
