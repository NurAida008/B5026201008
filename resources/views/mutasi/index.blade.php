@extends('websitepweb.website')

@section('title', 'Data Mutasi')

	@section('container')

	<a href="/mutasi/tambah" class="btn btn-warning"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
            <th>ID</th>
			<th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($mutasi as $a)
		<tr>
            <td>{{ $a->ID}}</td>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Departemen }}</td>
			<td>{{ $a->SubDepartemen }}</td>
			<td>{{ $a->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $a->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/delete/{{ $a->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$mutasi-> links()}}

@endsection
