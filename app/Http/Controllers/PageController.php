<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kkn;
use App\Models\Pkl;
use App\Models\Pkltext;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function daftar_laporan()
    {
        $kkn = Kkn::all();
        $pkl = Pkltext::all();

        return view('daftar-laporan', [
            'data' => $kkn,
            'pkl' => $pkl
        ]);
    }
}
