<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Mutasi</title>
</head>
<body class="container m-5">



	<h2>Tabel Mutasi</h2>

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
				<a href="/mutasi/edit/{{ $a->ID }}" class="btn btn-danger">Edit</a>
				|
				<a href="/mutasi/delete/{{ $a->ID }}" class="btn btn-info">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
