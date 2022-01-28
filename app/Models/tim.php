<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tim extends Model
{
    use SoftDeletes;

    protected $table = 'tim';
    protected $fillable = [
        'gambar',
        'nama',
        'nim'
    ];

    protected $hidden;
}
