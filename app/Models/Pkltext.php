<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkltext extends Model
{
    use HasFactory;
    protected $table = 'pkl_text';
    protected $primaryKey = 'id_pkl';
    protected $fillable = [
        'judul_pkl',
        'instansi_pkl',
        'data_mhs',
        'nip',
        'tahun',
        'semester',
        'file_pkl',
    ];
}
