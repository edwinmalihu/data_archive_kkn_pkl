<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pkl;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Pkltext;
use Illuminate\Support\Facades\Storage;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        return view('dashboard.pkl', [
            'dosen' => $dosen,
            'result' => $result
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * add 1 field untuk nama dan npm
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_pkl' => 'required',
            'instansi_pkl' => 'required',
            'npm' => 'required',
            'nama_mhs' => 'required',
            'nip' => 'required',
            'tahun' => 'required',
            'semester' => 'required'
        ]);

        if ($request->file('file_pkl')) {
            $validated['file_pkl'] = $request->file('file_pkl')->store('file-pdf-pkl');
        }
        

        Pkl::create($validated);

        return redirect('/dashboard/pkl')->with('status', 'Data Berhasil ditambah!');
    }
    
    //tambah data pkl text area
    public function addpkl(Request $request)
    {
        $validated = $request->validate([
            'judul_pkl' => 'required',
            'instansi_pkl' => 'required',
            'data_mhs' => 'required',
            'nip' => 'required',
            'tahun' => 'required',
            'semester' => 'required',
            'file_pkl' => 'required|mimes:pdf|max:5048'
        ]);

        if ($request->file('file_pkl')) {
            $validated['file_pkl'] = $request->file('file_pkl')->store('file-pdf-pkl');
        }
        

        Pkltext::create($validated);

        return redirect('/dashboard')->with('status', 'Data Berhasil ditambah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * view update edit text area
     */
    public function edit($id)
    {
        $pkl = Pkltext::find($id);
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
        return view('dashboard.edit_pkl', [
            'pkl' => $pkl,
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
     * 
     * update data pkl text area
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_pkl' => 'required',
            'instansi_pkl' => 'required',
            'data_mhs' => 'required',
            'nip' => 'required',
            'tahun' => 'required',
            'semester' => 'required'
        ]);

        if ($request->file('file_pkl')) {
            if ($request->old_file_pkl) {
                Storage::delete($request->old_file_pkl);
            }
            $validated['file_pkl'] = $request->file('file_pkl')->store('file-pdf-pkl');
        }

        Pkltext::where('id_pkl', $id)
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
        $file = Pkltext::where('id_pkl', $id)->firstOrFail();
        if ($file->file_pkl) {
            Storage::delete($file->file_pkl);
        }

        Pkltext::destroy($id);
        return redirect('/dashboard')->with('status', 'Data Berhasil dihapus!');
    }
}
