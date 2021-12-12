@extends('websitepweb.website')
@section('title', 'Edit Meja')


	@section('container')
    <a href="/meja"   class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)
	<form action="/meja/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodemeja}}">
		Merk <input type="text" required="required" name="merk" value="{{ $p->merkmeja }}" class="form-control"> <br/>
		Stock <input type="text" required="required" name="stock" value="{{ $p->stockmeja }}" class="form-control"> <br/>
        Tersedia
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="tersedia" name="tersedia" value="T" @if ($p->tersedia === "T") checked="checked" @endif>
            <label for="tersedia">Tersedia</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="tersedia" value="-" @if ($p->tersedia === "-") checked="checked" @endif>
            <label for="tidak">Tidak Tersedia</label><br>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-warning mb-5">
	</form>
	@endforeach
@endsection
