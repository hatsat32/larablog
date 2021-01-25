<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoriler';
    protected $primaryKey = 'id';

    protected $fillable = [
        'isim', 'aciklama'
    ];
}
