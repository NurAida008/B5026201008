@extends('websitepweb.website')
@section('title', 'Edit Mutasi')


	@section('container')

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>

	@foreach($mutasi as $a)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $a->ID }}"> <br/><br>
		IDPegawai <input type="text" required="required" name="IDPegawai" value="{{ $a->IDPegawai }}" class="form-control"> <br/><br>
		Departemen <input type="text" required="required" name="Departemen" value="{{ $a->Departemen }}" class="form-control"> <br/><br>
		SubDepartemen <input type="text" required="required" name="SubDepartemen" value="{{ $a->SubDepartemen }}" class="form-control"> <br/><br>
        MulaiBertugas
        <div class="form-group">
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="MulaiBertugas" />
                    <span class="input-group-addon input-group-prepend d-flex">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div> <br/><br>
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5" >
	</form>
	@endforeach
@endsection
