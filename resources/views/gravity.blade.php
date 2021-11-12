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
    <title>trying php</title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: url(background.png);
        background-position: center;
        background-size: cover;
        display: flex;
        min-height: 100vh;
        font-family: 'Roboto', sans-serif;
        }

        .box{
        width: 750px;
        background: #f2ccff;
        padding: 20px;
        align-items: center;
        justify-content: center;
        margin: 50px auto;
        border: 1px solid black;
        border-radius: 10px;
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
        <h2 class="mb-3 text-center">Where is the current position of the object?</h2>
        <br>
        <form action="physics"  method="post">
            @csrf
            <!--Initial Velocity-->
            <div class="row mb-3">
                <label for="inputnama" class="col-sm-3">Initial Velocity</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                  <input type="number"  name="initialvelocity" id="inputnamamahasiswa">
                </div>
              </div>

              <!--Falling Time-->
              <div class="row mb-3">
                <label for="inputZIPCode" class="col-sm-3">Falling time</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                  <input type="number"  name="fallingtime" id="inputnrpmahasiswa">
                </div>
              </div>

              <!--Initial Position-->
                <div class="row mb-3">
                <label for="inputnomorhp" class="col-sm-3">Initial Position</label>
                <p class="col-sm-1">:</p>
                <div class="col-sm-7">
                <input type="number" name="initialposition" id="inputnomorhp">
                  </div>
                </div>

              <!--Button-->
              <div class="row mb-3 text-center">
                  <div class="col">
                    <button class="button btn-primary" type="submit">Send</button>
                    <button class="button btn-success text-black" type="reset">Reset</button>
                </div>
              </div>
        </form>
            </div>
        </div>

</body>
</html>
