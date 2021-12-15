@extends('websitepweb.website')
@section('title', 'Tambah Karyawan')


	@section('container')

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post" >
		{{ csrf_field() }}
		NIP <input type="text" name="nip" class="form-control"> <br/>
		Nama <input type="text" name="nama" class="form-control"> <br/>
		Pangkat<input type="text" name="pangkat" class="form-control"> <br/>
        Gaji<input type="number" name="gaji" class="form-control"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-warning">
	</form>

@endsection
