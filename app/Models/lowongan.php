<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lowongan extends Model
{
    use SoftDeletes;

    protected $table = 'lowongan';
    protected $fillable = [
        'gambar',
        'judul',
        'isi'
    ];

    protected $hidden;
}
