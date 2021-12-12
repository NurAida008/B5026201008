@extends('websitepweb.website')
@section('title', 'Detail Data Pegawai')


	@section('container')
    <a href="/pegawai"   class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

		{{-- Nama <label type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"> <br/>
		Jabatan <label type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"> <br/>
		Umur <label type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"class="form-control"> <br/>
		Alamat <label required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }} </textarea> <br/> --}}
            Nama <input type="text" name="nama" class="form-control" value="{{ $p->pegawai_nama }}" readonly> <br/>
            Jabatan <input type="text" name="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}" readonly> <br/>
            Umur <input type="number" name="umur" class="form-control" value="{{ $p->pegawai_umur }}" readonly> <br/>
            Alamat <textarea name="alamat" class="form-control" readonly> {{ $p->pegawai_alamat }} </textarea> <br/>

	@endforeach
@endsection
