<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaController extends Controller
{
    public function index()
	{
        $meja = DB::table('meja')->paginate(5) ;

    	// mengirim data meja$meja ke view index
		return view('meja.index',['meja' => $meja]);

	}

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
    $meja = DB::table('meja')->get();

	return view('meja.tambah', ['meja' => $meja]);

}
// method untuk insert data ke table meja
public function store(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table meja
        DB::table('meja')->insert([
            'merkmeja' => $request->merk,
            'stockmeja' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman meja
        return redirect('/meja');
    }
    // method untuk edit data meja
public function edit($id)
{
	// mengambil data meja berdasarkan id yang dipilih
	$meja = DB::table('meja')->where('kodemeja',$id)->get();

	// passing data meja yang didapat ke view edit.blade.php
	return view('meja.edit',['meja' => $meja ]);
}
// update data meja
// public function update(Request $request)
// {
// 	// update data meja
// 	DB::table('meja')->where('kodemeja',$request->id)->update([
//             'merkmeja' => $request->merk,
//             'stockmeja' => $request->stock,
//             'tersedia' => $request->tersedia,

// 	]);
// 	// alihkan halaman ke halaman meja
// 	return redirect('/meja');
// }
// // method untuk hapus data meja
public function update(Request $request){
	DB::table('meja')->where('kodemeja',$request->id)->update([
        'merkmeja' => $request->merk,
		'stockmeja' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	return redirect('/meja');
    }

public function hapus($id)
{
	// menghapus data meja berdasarkan id yang dipilih
	DB::table('meja')->where('kodemeja',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/meja');
}

public function cari(Request $request)
	{
		$cari = $request->cari;
		$meja = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate();
		return view('meja.index',['meja' => $meja]);
	}

}
