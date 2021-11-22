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

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="IDPegawai"> <br/><br>
		Departemen <input type="text" name="Departemen"> <br/><br>
		SubDepartemen <input type="text" name="SubDepartemen"> <br/><br>
		MulaiBertugas <input type="datetime" name="MulaiBertugas"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
