<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	// return view('tugas.index',['tugas' => $tugas]);
		// $mutasi = DB::table('mutasi')->get();
        // $mutasi = DB::table('mutasi')->paginate(5) ;
        $mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('mutasi.*', 'pegawai.pegawai_nama')
        ->paginate(3);
    	return view('mutasi.index',['mutasi' => $mutasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('mutasi.tambah', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		DB::table('mutasi')->insert([
			'IDPegawai' => $request->IDPegawai,
			'Departemen' => $request->Departemen,
			'SubDepartemen' => $request->SubDepartemen,
			'MulaiBertugas' => $request->MulaiBertugas
		]);
		return redirect('/mutasi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {

		$mutasi = DB::table('mutasi')->where('ID',$ID)->get();

		return view('mutasi.edit',['mutasi' => $mutasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('mutasi')->where('ID',$request->ID)->update([
			'IDPegawai' => $request->IDPegawai,
			'Departemen' => $request->Departemen,
			'SubDepartemen' => $request->SubDepartemen,
			'MulaiBertugas' => $request->MulaiBertugas
		]);

		return redirect('/mutasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($ID)
    {

		DB::table('mutasi')->where('ID',$ID)->delete();


		return redirect('/mutasi');
    }
}
