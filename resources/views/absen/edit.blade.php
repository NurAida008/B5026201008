@extends('websitepweb.website')
@section('title', 'Edit Absen')


	@section('container')
    <br>
    <a href="/absen"  class="btn btn-secondary"> Kembali</a>


	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input class="form-control" type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        Pegawai <select class="form-control mt-2" id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <div class="form-group">
            <label for="datetimepicker" class="control-label">Tanggal </label>
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="tanggal" />
                    <span class="input-group-addon input-group-prepend d-flex">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div>
            </div>
		Status
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
            <label for="hadir">HADIR</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
            <label for="tidak">TIDAK HADIR</label><br>
        </div>
        <div class="text-center">
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5">
        </div>
	</form>
	@endforeach

    @endsection
