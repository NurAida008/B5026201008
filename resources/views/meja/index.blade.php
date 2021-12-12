@extends('websitepweb.website')
@section('title', 'Data meja')
@section('container')


<a href="/meja/tambah" class="btn btn-warning"> + Tambah Meja Baru</a>

<br/>
<br/>

<table class="table table-striped">
    <p>Cari Data meja berdasarkan nama</p>
<form action="/meja/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari meja .." value="{{ old('cari') }}"  class="form-control">
    <input type="submit" value="CARI" class="btn btn-warning form-control">
    <br>
</form>
<br>
    <tr>
        <th>No</th>
        <th>Merk</th>
        <th>Stok</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach($meja as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->merkmeja }}</td>
        <td>{{ $p->stockmeja }}</td>
        <td>{{ $p->tersedia }}</td>

        <td>
            <a href="/meja/edit/{{ $p->kodemeja }}" class="btn btn-warning">Edit</a>
            <a href="/meja/hapus/{{ $p->kodemeja }}" class="btn btn-danger">Hapus</a>



        </td>
    </tr>
    @endforeach
</table>

{{$meja-> links()}}

@endsection
