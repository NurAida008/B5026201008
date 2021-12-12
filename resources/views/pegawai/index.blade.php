    @extends('websitepweb.website')
    @section('title', 'Data Pegawai')
	@section('container')


	<a href="/pegawai/tambah" class="btn btn-warning"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
        <p>Cari Data Pegawai berdasarkan nama</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}"  class="form-control">
		<input type="submit" value="CARI" class="btn btn-warning form-control">
        <br>
	</form>
    <br>
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
		    <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-success" role="button">View Detail</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>



			</td>
		</tr>
		@endforeach
	</table>

{{$pegawai-> links()}}

    @endsection
