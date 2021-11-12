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
    <title>Registation Form</title>

<style>
body{
 background-image: url(background.png);
 background-position: center;
 background-size: cover;
 align-items: center;
 display: flex;
 min-height: 100vh;
 font-family: 'Roboto', sans-serif;
}

textarea {
vertical-align: top;
width: 100%;
background-color: #fff;
color: #3b3e87;
outline: none;
border: none;
border-radius: 5px;
padding: 10px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

.left{
 text-align: left;
}

.main{
 display: inline-flex;
 box-shadow: 0 2px 10px 10px rgba(0,0,0,0.2)
}

.signin{
 width: 750px;
 margin: auto;
 background: #9933ff;
 color: #fff;
 padding: 20px;
 text-align: right;
 border-radius: 20px;
}

label{
 font-size: 14px;
}

form input , form button{
 color: #fff;
 background: #3b3e87;
 outline: none;
 border: none;
 border-radius: 15px;
 padding: 10px;
}

.ukuran {
 width: 300px;
 height: 35px;
}

form select{
  width: 100%;
 background-color: #fff;
 color: #3b3e87;
 outline: none;
 border: none;
 border-radius: 5px;
 padding: 10px;
}

form a{
 color: #fff;
 font-size: 14px;
 float: right;
 margin: 15px 25px;
}

form button{
 background: #330066;
 font-size: 16px;
 padding: 1px; margin: 5px 0 5px 15px;
}
</style>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="signin">
                <center> <h1> <b>Welcome!</b> </h1>
                  <p>Sign Up into your account</p>
                </center>
                <form action="https://drive.google.com/drive/folders/1mtkpZhRC4gZbz1S5FIIaCqseyrm-O6xg?usp=sharing" onsubmit="return validateForm()">
                    <!--User ID-->
                    <div class="row mb-3">
                      <label for="inputUserID" class="col-sm-2 col-form-label">User ID:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserID">
                      </div>
                    </div>

                    <!--Password-->
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                      </div>
                    </div>

                    <!--Name-->
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName">
                        </div>
                      </div>

                    <!--Address-->
                      <div class="row mb-3">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputAddress">
                        </div>
                      </div>

                    <!--Country-->
                      <div class="row mb-3">
                        <label for="inputCountry" class="col-sm-2 col-form-label">Country:</label>
                        <div class="col-sm-10">
                            <select id="inputCountry" class="form-select">
                                <option value="0">(Please select a country)</option>
                                <option>USA</option>
                                <option>Belanda</option>
                                <option>China</option>
                                <option>Denmark</option>
                                <option>Indonesia</option>
                                <option>Korea</option>
                        </select>
                        </div>
                      </div>

                    <!--ZIP Code-->
                    <div class="row mb-3">
                        <label for="inputZIPCode" class="col-sm-2 col-form-label">ZIP Code:</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputZIPCode">
                        </div>
                      </div>

                    <!--Email-->
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail">
                        </div>
                      </div>

                    <!--Sex-->
                <div class="row mb-3" >
                    <label for="inputSex" class="col-sm-2 col-form-label">Sex:</label>
                    <div class="col-sm-10 left" style="margin-top: 5px;">
                      <div class="form-check-inline">
                        <input type="radio" class="form-check-input" id="male" name="female" value="Male">Male
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" id="female" name="female" value="Female">Female
                    </div>
                    </div>
                </div>

                <!--Language-->
                <div class="row mb-3" >
                    <label for="inputLanguage" class="col-sm-2 col-form-label">Language:</label>
                    <div class="col-sm-10 left" style="margin-top: 5px;">
                      <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" id="english" name="english" value="english">English
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" id="non" name="non" value="non">Non English
                    </div>
                </div>
                </div>

                <!--About-->
                    <div class="row mb-3">
                      <label for="inputAbout" class="col-sm-2 col-form-label">About:</label>
                      <div class="col-sm-10">
                      <textarea rows="5" cols="86" id="TITLE"> </textarea>
                      </div>
                    </div>

                    <center><button class="ukuran" type="submit">Submit</button></center>
                  </form>
            </div>
        </div>
    </div>
    <script>
      function validateForm(){
          const userID = document.getElementById("inputUserID").value;
          const password = document.getElementById("inputPassword").value;
          const name = document.getElementById("inputName").value;
          const zipcode = document.getElementById("inputZIPCode").value;
          const email = document.getElementById("inputEmail").value;

          if(userID == ""){
            alert("Please write your user id");
            return false;
            }
          if(userID.length < 5 || userID.length >= 12){
            alert("Number of characters allowed for user id 5 to 12 characters");
            return false;
            }
          if(password == ""){
            alert("Please write your password");
            return false;
            }
          if(password.length < 7 || password.length >= 12){
            alert("Number of characters allowed for user id 7 to 12 characters");
            return false;
            }
          if(name == ""){
            alert("Please write your name");
            return false;
            }
          var huruf = /^[A-Za-z\s]+$/;
          if(!name.match(huruf)){
            alert("Use only the alphabet and spaces when filling in names!");
            return false;
            }
          if(document.getElementById("country").selectedIndex == 0){
            alert("Choose your country!");
            return false;
            }
          if(zipcode == ""){
            alert("Please write your ZIP Code");
            return false;
            }
          var angka = /^[0-9]+$/;
          if(!zipcode.match(angka)){
            alert("Use only numbers when filling in the ZIP Code!");
            return false;
            }
          if(email == ""){
            alert("Please write your email");
            return false;
            }
          var foremail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!email.match(foremail)){
            alert("Use the right email format!");
            return false;
            }
          if(document.getElementById("male").checked == false && document.getElementById("female").checked == false){
            alert("Choose your gender!");
            return false;
            }
          if(document.getElementById("english").checked == false && document.getElementById("non").checked == false){
            alert("Choose your language!");
            return false;
            }
          }
  </script>
</body>
</html>
