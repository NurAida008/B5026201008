@extends('websitepweb.website')
@section('title', 'Tambah Pegawai')


	@section('container')

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" >
		{{ csrf_field() }}
		Nama <input type="text" name="nama" class="form-control"> <br/>
		Jabatan <input type="text" name="jabatan" class="form-control"> <br/>
		Umur <input type="number" name="umur" class="form-control"> <br/>
		Alamat <textarea name="alamat" class="form-control"></textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-warning">
	</form>

@endsection
