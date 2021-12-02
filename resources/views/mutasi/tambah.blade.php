@extends('websitepweb.website')
@section('title', 'Tambah Mutasi')


	@section('container')

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="IDPegawai" class= "form-control"> <br/><br>
		Departemen <input type="text" name="Departemen" class= "form-control"> <br/><br>
		SubDepartemen <input type="text" name="SubDepartemen" class= "form-control"> <br/><br>
		MulaiBertugas <input type="datetime" name="MulaiBertugas" class= "form-control"> <br/><br>
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5">
	</form>
    @endsection


