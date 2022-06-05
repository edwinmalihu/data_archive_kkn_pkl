<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_kkn',
        'nama',
        'nip',
        'fakultas',
        'jurusan',
        'agama',
        'alamat',
    ];
}
