<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kkn extends Model
{
    use HasFactory;
    protected $table = 'tables_kkn';
    protected $primaryKey = 'id_kkn';
    protected $fillable = [
        'judul_kkn',
        'file_kkn',
        'nama_kelompok',
        'no_kelompok',
        'nama_user',
        'npm_nip',
        'tahun',
        'semester',
    ];
}
