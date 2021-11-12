<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ETS Kode A 5026201008</title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        .box{
        width: 750px;
        background: #fff;
        padding: 20px;
        align-items: center;
        justify-content: center;
        margin: 50px auto;
        border: 1px solid black;
        }

        select{
            width: 400px;
            height: 30px;
        }

        input{
            width: 400px;
        }

    </style>

</head>
<body>
    <div class="container mt-3">
        <div class="box">
            <div class="col-3">Nur Aida Febrianti <br> Aida <br>5026201008</div>
        <h2 class="mb-3 text-center">Form Pendaftaran Kuota Internet Masa Pandemi</h2>
        <form action="https://www.its.ac.id/id/beranda/" onsubmit="return requirement()">
            <!--Nama Mahasiswa-->
            <div class="row mb-3">
                <label for="inputnama" class="col-sm-3">Nama Mahasiswa</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                  <input type="text"  id="inputnamamahasiswa">
                </div>
              </div>

              <!--NRP Mahasiswa-->
              <div class="row mb-3">
                <label for="inputZIPCode" class="col-sm-3">NRP Mahasiswa</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                  <input type="number"  id="inputnrpmahasiswa">
                </div>
              </div>

              <!--Jurusan-->
              <div class="row mb-3">
                <label for="inputjurusan" class="col-sm-3">Jurusan</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                    <select id="inputjurusan">
                        <option value="0"></option>
                        <option>Sistem Informasi</option>
                        <option>Elektro</option>
                        <option>Informatika</option>
                </select>
                </div>
              </div>

              <!--Nomor Handphone-->
                <div class="row mb-3">
                <label for="inputnomorhp" class="col-sm-3">Nomor Handphone</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                <input type="number"  id="inputnomorhp">
                  </div>
                </div>

              <!--Button-->
              <div class="row mb-3 text-center">
                  <div class="col">
                    <button class="button btn-primary" type="submit">Kirim</button>
                    <button class="button btn-success text-black" type="reset">Reset</button>
                </div>
              </div>
        </form>
            </div>
        </div>
        <script>
            function requirement(){
            const namamahasiswa = document.getElementById("inputnamamahasiswa").value;
            const nrpmahasiswa = document.getElementById("inputnrpmahasiswa").value;
            const jurusan = document.getElementById("inputjurusan").value;
            const nomorhp = document.getElementById("inputnomorhp").value;

            if(namamahasiswa == ""){
                alert("Please write your name");
                return false;
                }
            var huruf = /^[A-Za-z\s]+$/ ;
            if(!namamahasiswa.match(huruf)|| namamahasiswa.length == 1){
                alert("Use only the alphabet and spaces when filling in names!");
                return false;
                }

            if(nrpmahasiswa == ""){
            alert("Please write your NRP");
            return false;
            }
            var angka = /^[0-9]+$/;
            if(!nrpmahasiswa.match(angka) || nrpmahasiswa.length>10|| nrpmahasiswa.length<10){
                alert("Use only numbers when filling in the NRP Mahasiswa and number of characters allowed for NRP Mahasiswa 10 characters");
                return false;
                }

            if(document.getElementById("inputjurusan").selectedIndex == 0){
                alert("Choose your department");
                return false;
                }

            if(nomorhp == ""){
            alert("Please write your phone number");
            return false;
            }
            var angka = /^[0-9]+$/;
            if(!nomorhp.match(angka) || nomorhp.length<10){
                alert("Use only numbers when filling in the phone number and number of characters allowed for phone number min 10 characters");
                return false;
                }
            }

        </script>

</body>
</html>
