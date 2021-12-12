@extends('websitepweb.website')
@section('title', 'Tambah Mutasi')


	@section('container')

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" class="form-control mt-2" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
		Departemen <input type="text" name="Departemen" class= "form-control"> <br/><br>
		SubDepartemen <input type="text" name="SubDepartemen" class= "form-control"> <br/><br>
		MulaiBertugas
        <div class="form-group">
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="MulaiBertugas" />
                    <span class="input-group-addon input-group-prepend d-flex">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div>
            </div><br/><br>
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5">
	</form>
    @endsection


