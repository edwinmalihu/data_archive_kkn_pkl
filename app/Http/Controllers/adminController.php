<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Kkn;
use App\Models\Pkl;
use App\Models\Pkltext;
use Illuminate\Support\Facades\Response;
use PDF;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftar_user()
    {
        
        // $data = User::all()->where('status');
        $data = User::all()->where('status', '>', 1);
        $jumlah_user = User::all()->count();

        
        return view('dashboard.lihatuser',[
            'data' => $data,
            'jumlah_user' => $jumlah_user
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDosen()
    {
        return view('dashboard.tambahdosen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addDosen(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:dosens|min:10|numeric',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
            'alamat' => 'required'
        ]);

        Dosen::create($validated);

        return redirect('/dashboard/tambah-dosen')->with('status', 'Data Berhasil di tambah!');
    }

    public function listDosen()
    {
        $data = Dosen::all();
        return view('dashboard.lihat-dosen',[
            'data' => $data
        ]);
    }

    public function view_edit_dosen($id)
    {
 
        $dosen = Dosen::find($id);
        return view('dashboard.editdosen', [
            'dosen' => $dosen
        ]);
    }

    public function edit_dosen(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|min:10|numeric',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'agama' => 'required',
            'alamat' => 'required'
        ]);

        Dosen::where('id', $id)
        ->update($validated);

        return redirect('/dashboard/lihat-dosen')->with('status', 'Data Berhasil di tambah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);

	    return response()->json([
	      'data' => $data
	    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        
        $id_user = $request->id;
        $validated = $request->validate([
            'verify' => 'required',
        ]);

        
        User::where('id', $id_user)
        ->update($validated);
       
        return redirect('/dashboard/daftar-user')->with('status', 'Data Berhasil diubah!');

          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_user($id)
    {
        User::destroy($id);
        return redirect('/dashboard/daftar-user')->with('status', 'Data Berhasil dihapus!');
    }

    // delete dosen
    public function delete_dosen($id)
    {
        Dosen::destroy($id);
        return redirect('/dashboard/lihat-dosen')->with('status', 'Data Berhasil dihapus!');
    }

    public function exportPdf()
    {
        $pkl_report = Pkltext::all();
        $data = [
            'title' => 'Report Praktek Kerja Lapangan (PKL)',
            'date' => date('m/d/Y'),
            'pkl_report' => $pkl_report
        ];
           
        $pdf = PDF::loadView('dashboard.export-pdf-pkl', $data);
     
        return $pdf->download('Praktek-Kerja-Lapangan.pdf');
    }

    public function exportKkn()
    {
        $kkn_report = Kkn::all();
        $data = [
            'title' => 'Report Kuliah Kerja Nyata (KKN)',
            'date' => date('m/d/Y'),
            'kkn_report' => $kkn_report
        ];
           
        $pdf = PDF::loadView('dashboard.export-pdf-kkn', $data);
     
        return $pdf->download('kuliah-kerja-nyata.pdf');
    }


    // 
}
