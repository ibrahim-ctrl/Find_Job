<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class authmodel extends Model
{
    use SoftDeletes;

    protected $table = 'loginad';
    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden;
}
