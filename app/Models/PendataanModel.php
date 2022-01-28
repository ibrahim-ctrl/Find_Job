<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendataanModel extends Model
{
    use SoftDeletes;

    protected $table = 'pendataan';
    protected $fillable = [
        'nama',
        'no_hp',
        'umur',
        'email',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'pend_akhir',
        'sosmed'
    ];

    protected $hidden;
}
