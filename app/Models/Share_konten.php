<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Share_konten extends Model
{
  protected $table = 'share_kontens';

  protected $fillable = [
    'konten_id',
    'dibagikan_oleh',
  ];
}
