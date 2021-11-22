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


	<h2>Edit Mutasi</h2>

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $a)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $a->ID }}"> <br/><br>
		IDPegawai <input type="text" required="required" name="IDPegawai" value="{{ $a->IDPegawai }}"> <br/><br>
		Departemen <input type="text" required="required" name="Departemen" value="{{ $a->Departemen }}"> <br/><br>
		SubDepartemen <input type="text" required="required" name="SubDepartemen" value="{{ $a->SubDepartemen }}"> <br/><br>
		MulaiBertugas <input type="datetime" required="required" name="MulaiBertugas" value="{{ $a->MulaiBertugas }}"> <br/><br>
		<input type="submit" value="Simpan Data" >
	</form>
	@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
