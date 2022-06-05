<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kkn;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Dosen;

class KknController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = Dosen::all();
        $angka = 3;
        $result = array();
        for ($i=-1; $i <= $angka; $i++) { 
        $day = date('d');
        $bulan = date('m');
        $tahunAk = date('y')-$i;
        $tahun = date('y')-$tahunAk;
        $tanggal_now = date('d-m-y');
        $prosesTanggal = mktime(0,0,0,date('d')-$day,date('m')-$bulan,date('y')-$tahun);
        $tanggalakhir = date('Y',$prosesTanggal);
        array_push($result, $tanggalakhir);
        }
        
        return view('dashboard.kkn', [
            'dosen' => $dosen,
            'result' => $result
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_kkn' => 'required',
            'file_kkn' => 'required|mimes:pdf|max:5048',
            'nama_kelompok' => 'required',
            'no_kelompok' => 'required',
            'nama_user' => 'required',
            'npm_nip' => 'required',
            'tahun' => 'required',
            'semester' => 'required'
        ]);

        // dd($validated);

        // // // if (Kkn::where('judul_kkn', $request->judul)->exists()) {
        // // //     return redirect('/')->with('status', 'Judul Sudah Ada!');
        // // // }

        if ($request->file('file_kkn')) {
            $validated['file_kkn'] = $request->file('file_kkn')->store('file-pdf-kkn');
        }
        

        Kkn::create($validated);

        return redirect('/dashboard')->with('status', 'Data Berhasil di tambah!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $kkn = Kkn::find($id);
        $dosen = Dosen::all();
        $angka = 3;
        $result = array();
        for ($i=-1; $i <= $angka; $i++) { 
        $day = date('d');
        $bulan = date('m');
        $tahunAk = date('y')-$i;
        $tahun = date('y')-$tahunAk;
        $tanggal_now = date('d-m-y');
        $prosesTanggal = mktime(0,0,0,date('d')-$day,date('m')-$bulan,date('y')-$tahun);
        $tanggalakhir = date('Y',$prosesTanggal);
        array_push($result, $tanggalakhir);
        }
        return view('dashboard.edit_kkn', [
            'kkn' => $kkn,
            'dosen' => $dosen,
            'result' => $result
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_kkn' => 'required',
            'nama_kelompok' => 'required',
            'no_kelompok' => 'required',
            'nama_user' => 'required',
            'npm_nip' => 'required',
            'tahun' => 'required',
            'semester' => 'required'
        ]);

        if ($request->file('file_kkn')) {
            if ($request->old_file_kkn) {
                Storage::delete($request->old_file_kkn);
            }
            
            $validated['file_kkn'] = $request->file('file_kkn')->store('file-pdf-kkn');
        }
        

        Kkn::where('id_kkn', $id)
        ->update($validated);
        return redirect('/dashboard')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Kkn::where('id_kkn', $id)->firstOrFail();
        if ($file->file_kkn) {
            Storage::delete($file->file_kkn);
        }
        
        Kkn::destroy($id);
        return redirect('/dashboard')->with('status', 'Data Berhasil dihapus!');
    }

    public function KknDownload($id)
    {
        $file = Kkn::where('id_kkn', $id)->first();
        $pathToFile = storage_path('app/public/' . $file->file_kkn);
        return $file->file_kkn;
    }
}