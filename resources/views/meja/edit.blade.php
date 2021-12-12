@extends('websitepweb.website')
@section('title', 'Edit Meja')


	@section('container')
    <a href="/meja"   class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)
	<form action="/meja/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->meja_id }}"> <br/>
		Nama <input type="text" required="required" name="merk" value="{{ $p->merkmeja }}" class="form-control"> <br/>
		Jabatan <input type="text" required="required" name="stock" value="{{ $p->stockmeja }}" class="form-control"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->tersedia }}"class="form-control"> <br/>
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
            <label for="hadir">Tersedia</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
            <label for="tidak">Tidak Tersedia</label><br>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5">
	</form>
	@endforeach
@endsection
