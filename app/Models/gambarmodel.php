<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gambarmodel extends Model
{
    use SoftDeletes;

    protected $table = 'gambar';
    protected $fillable = [
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4'
    ];

    protected $hidden;
}
