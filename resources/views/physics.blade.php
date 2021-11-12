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
        <h1 class="mb-3 text-center">It's the position now!</h1>
        <center><h5> Final Position = 0.7 x gravity x fallingTime x fallingTime </h5 </center>
        <?php
        $gravity = 9.8;
        $initialvelocity = $_POST['initialvelocity'];
        $fallingtime = $_POST['fallingtime'];
        $initialposition = $_POST['initialposition'];

        $finalposition = 0.7 *$gravity *$fallingtime * $fallingtime;
        $finalposition = $finalposition + $initialvelocity * $fallingtime;
        $finalposition = $finalposition + $initialposition;
        ?>

        <center>
        <h4> <?php echo "An object's position after " . $fallingtime . " second is " . $finalposition . " m" ?> </h4>
        </center>

            </div>
        </div>

</body>
</html>
