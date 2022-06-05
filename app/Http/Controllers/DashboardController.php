<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kkn;
use App\Models\Pkl;
use App\Models\Pkltext;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Dosen;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $kkn = Kkn::all();
        $pkl = Pkltext::all();

        return view('dashboard.home', [
            'data' => $kkn,
            'pkl' => $pkl
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pkl = Pkl::find($id);
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
     */
    public function update(Request $request, $id)
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

        if ($request->file('file_kkn')) {
            if ($request->old_file_pkl) {
                Storage::delete($request->old_file_pkl);
            }
            $validated['file_kkn'] = $request->file('file_kkn')->store('file-pdf-pkl');
        }

        Pkl::where('id_pkl', $id)
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
        $file = Pkl::where('id_pkl', $id)->firstOrFail();
        if ($file->file_kkn) {
            Storage::delete($file->file_kkn);
        }

        Pkl::destroy($id);
        return redirect('/dashboard')->with('status', 'Data Berhasil dihapus!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $book = Pkl::where('id_pkl', $id)->firstOrFail();
        $pathToFile = storage_path('app/public/' . $book->file_kkn);
        return response()->download($pathToFile);
    }

}
