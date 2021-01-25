<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    protected $table = 'yazilar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'baslik', 'slug', 'icerik'
    ];
}
