@extends('websitepweb.website')
@section('title', 'Tambah Meja')


	@section('container')

	<a href="/meja" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/meja/store" method="post" >
		{{ csrf_field() }}
		Merk <input type="text" name="nama" class="form-control"> <br/>
		Stock <input type="text" name="jabatan" class="form-control"> <br/>
        Tersedia
		<div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="hadir" name="status" >
            <label for="hadir">Tersedia</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" >
            <label for="tidak">Tidak Tersedia</label><br>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-warning">
	</form>

@endsection
