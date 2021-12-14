@extends('websitepweb.website')
@section('title', 'Detail Data meja')


	@section('container')
    <a href="/meja"   class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)


            Merk Meja <input type="text" name="merk" class="form-control" value="{{ $p->merkmeja }}" readonly> <br/>
            Stok <input type="text" name="stock" class="form-control" value="{{ $p->stockmeja }}" readonly> <br/>
            Status <input type="text" name="tersedia" class="form-control" value="{{ $p->tersedia }}" readonly> <br/>


	@endforeach
@endsection
