<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Selectors</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <style>
        .container{
            width: 100%;
        }
        .font{
            font-size: 18px;
            color: #141414;
            font-weight: 250;
            font-family: 'Hind Madurai', sans-serif;}
        body{
          background-color: #ffe6e6;
          background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
        }
                ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color: #ff4d4d;
        }
      </style>
</head>
<body>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#earring">Earring</a></li>
        <li><a href="#sunglasses">Sunglasses</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
      </ul>

      <div class="mt-3"><center><h1 class="container">Choose Your Accessory</h1></center></div>
      <div class="row mt-5">
          <div class="col">
            <center><img src=https://cdn.shopify.com/s/files/1/0282/3313/8275/products/E08200RD4_394x.jpg?v=1626387899 alt="1" width="150px"></center>
            <center><p class="mt-3 font">Linear Chandelier Earring, Red
                <br>$19.00 </p> </center>
              <center><button>Pick me</button></center>
          </div>
          <div class="col">
            <center><img src=https://cdn.shopify.com/s/files/1/0282/3313/8275/products/E07088YL4_394x.jpg?v=1626388366 alt="2" width="150px"></center>
            <center><p class="mt-3 font">Raffia Geometric, Yellow
                <br>$16.00 </p> </center>
              <center><button>Pick me</button></center>
    </div>
    <div class="col">
        <center><img src=https://cdn.shopify.com/s/files/1/0282/3313/8275/products/E07229WHPK4_394x.jpg?v=1626389451 alt="2" width="150px"></center>
        <center><p class="mt-3 font">Textured flower, Pink
            <br>$19.00 </p> </center>
          <center><button>Pick me</button></center>
    </div>
    <div class="col">
        <center><img src=https://cdn.shopify.com/s/files/1/0282/3313/8275/products/E08145RDG4_394x.jpg?v=1626392186 alt="2" width="150px"></center>
        <center><p class="mt-3 font">Fabric Wrapped Beaded, Red
            <br>$16.00 </p> </center>
          <center><button>Pick me</button></center>
    </div>
    <div class="col">
        <center><img src=https://cdn.shopify.com/s/files/1/0282/3313/8275/products/E07228MTS4_394x.jpg?v=1626392735 alt="2" width="150px"></center>
        <center><p class="mt-3 font">Metal and Beads, Green
            <br>$18.00 </p> </center>
          <center><button>Pick me</button></center>
    </div>
      </div>

      <center>
        <table border="2" class="mt-5">
            <tr>
              <th>Name of Earring</th>
              <th>Country</th>
            </tr>
            <tr>
              <td>Linear Chandelier Earring, Red</td>
              <td>Germany</td>
            </tr>
            <tr>
              <td>Metal and Beads, Green</td>
              <td>Sweden</td>
            </tr>
            <tr>
              <td>Fabric Wrapped Beaded, Red</td>
              <td>Mexico</td>
            </tr>
            <tr>
              <td>Seedbead Textured flower, Pink</td>
              <td>Austria</td>
            </tr>
            <tr>
              <td>Raffia Geometric, Yellow</td>
              <td>South Korea</td>
            </tr>
          </table>

      </center>
    <script>
        $(document).ready(function(){
  $("button").click(function(){
    $(this).hide();
  });
});

$(document).ready(function(){
  $("tr:odd").css("background-color", "yellow");
});
    </script>
</body>
</html>
