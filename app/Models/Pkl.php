<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    use HasFactory;
    protected $table = 'tables_pkl';
    protected $primaryKey = 'id_pkl';
    protected $fillable = [
        'judul_pkl',
        'instansi_pkl',
        'npm',
        'nama_mhs',
        'nip',
        'tahun',
        'semester',
        'file_pkl',
    ];
}
