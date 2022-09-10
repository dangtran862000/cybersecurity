<?php 
  session_start();
  // if (!isset($_SESSION["user_login"])) {
  //   header("location:login.php");
  // }
?>

<!DOCTYPE html>
<html>
<head>
<title>Password Game</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="stylesheet" type="text/css" href="logincss.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
.loginbutton {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    background-color: rgb(84, 105, 212);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                rgb(84, 105, 212) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
  }
  .col3 {
        display: none;
    }
  .logout_header {
    display: block;
  }
  .logout_footer {
    display: none;
  }
  .parent {

  height: 200px;
  width: 200px;
  position: relative;
  }
  .child {

  width: 10%;
  position: absolute;
  top: 20%;
  left: 50%;
  margin: -35px 0 0 -35px;
  }

  .position {
  float: left;
  margin: 100px 20px;
}


@media screen and (min-width: 801px) and (max-width: 1199px) {
    .img-col1 {
    display: none;
  }

  .col1 {
        height: 1000px;
    }
    .col2 {
        height: 1000px;
    }
  }
  @media screen and (min-width: 1200px) and (max-width: 2500px) {
    .img-col1 {
    display: none;
  }
    .col1 {
        height: 1000px;
    }
    .col2 {
        height: 1000px;
    }
  }
  @media screen and (min-width: 2501px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 1450px;
    }
  }

  @media screen and (max-width: 800px) {
    .col-container {
      display: block; /* Make the container element behave like a table */
      width: 100%; /* Set full-width to expand the whole page */
    }
    .logout_header {
      display: none;
    }
    .logout_footer {
      display: block;
    }
    .child {
      display: none;
      margin-top: 250%;
      
    }
    .col1 {
      display: block;
      width: 100%;
      height: 150px;
    }
    .col2 {
        display: none;
    background-color: rgb(219, 226, 245); /* Make elements inside the container behave like table cells */
      width: 100%;
      height: AUTO;
    }

    .col3 {
      background-color: rgb(219, 226, 245);
      display: flex; /* Make elements inside the container behave like table cells */
      width: 100%;
      height: auto;
    }
  }

</style>

</head>

<body>
    <div class="header">
      <h1>PASSWORD GAME <a href="logout.php" title="LogOut" class="btn btn-info btn-lg logout_header" style="float: right; background-color: rgb(83, 82, 122);">
        <span class="glyphicon"></span>Log out
      </a></h1>
      
    </div>

    <div class="col-container">
        <div class="col1" style="position: relative;" >
            <img src="./Image/iconCODE-FINAL-RGB-FULL.png" style="width: 20%;" class=" child"></img>
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center img-col1">  
                <img src="./Image/iconCODE-FINAL-RGB-FULL - original.png" style="width: 40%;" class="center"></img>
            </div>
        </div>
      <div class="col2">
        <div style="margin-top: 15%; margin-left: 15%; margin-right:15%">
        <p id="test"></p>
          <div class="container" >
            <h5 class="display-4 text-center">KIỂM TRA ĐỘ MẠNH YẾU MẬT KHẨU</h5>
            <div id="input">
              <div class="input-group" >
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="passwordType"
                  aria-label="Enter a password:"
                  onkeyup="getPassword()"/>
                <span class="input-group-btn">
                  <button
                    id="togglePW"
                    class="btn btn-secondary"
                    type="button"
                    style="cursor:pointer;"
                    onclick="togglePassword();">Show Password</button>
                </span>
              </div>
              <button style="margin-top: 5%" class="loginbutton" type="submit" onclick="myFunction()">KIỂM TRA ĐỘ BẢO MẬT</button>
            </div>
            <br/>
            <div id="result"> 
              <div class="jumbotron jumbotron-fluid" >
                <div class="container">
                  <h2 class="display-4" style="font-size: 40px">Mật khẩu của bạn có: </h2>
                  <ul class="lead list-group" id="requirements">
                    <li id="length" class="list-group-item">Ít nhất 12 ký tự</li>
                    <li id="lowercase" class="list-group-item">Hỗn hợp chữ thường</li>
                    <li id="uppercase" class="list-group-item">Hỗn hợp chữ hoa</li>
                    <li id="number" class="list-group-item">Hỗn hợp các chữ cái và số</li>
                    <li id="special" class="list-group-item">Bao gồm ít nhất một ký tự đặc biệt, ví dụ:! @ #? ]</li>
                  </ul>
                </div>  
              </div>
              <button class="loginbutton" type="submit" onclick="tryAgain()">THỬ LẠI</button>          
            </div>
          </div>          

        </div>
        </div>
      </div>
      <div class="col3">
        <div class="container" >
          <h5 style="margin-top: 20%" class="display-4 text-center">KIỂM TRA ĐỘ MẠNH YẾU MẬT KHẨU</h5>
          <div style="margin-top: 20%" id="input_col3">
            <div class="input-group" >
              <input
                type="password"
                id="password"
                class="form-control"
                name="passwordType"
                aria-label="Enter a password:"
                onkeyup="getPassword()"/>
              <span class="input-group-btn">
                <button
                  id="togglePW"
                  class="btn btn-secondary"
                  type="button"
                  style="cursor:pointer;"
                  onclick="togglePassword();">Show Password</button>
              </span>
            </div>
            <button style="margin-top: 5%; margin-bottom: 20%" class="loginbutton" type="submit" onclick="myFunction_col3()">KIỂM TRA ĐỘ BẢO MẬT</button>
          </div>
          <br/>
          <div id="result_col3"> 
            <div class="jumbotron jumbotron-fluid" >
              <div class="container">
                <h1 class="display-4">Password has:</h1>
                <ul class="lead list-group" id="requirements">
                  <li id="length" class="list-group-item">At least 8 characters</li>
                  <li id="lowercase" class="list-group-item">At least 1 lowercase letter</li>
                  <li id="uppercase" class="list-group-item">At least 1 uppercase letter</li>
                  <li id="number" class="list-group-item">At least 1 numerical number</li>
                  <li id="special" class="list-group-item">At least 1 special character</li>
                </ul>
              </div>  
            </div>
            <button style="margin-bottom: 20%" class="loginbutton" type="submit" onclick="tryAgain_col3()">THỬ LẠI</button>         
          </div>
        </div>
        
      </div>

    </div>
    <div class="footer">
      <div class="logout_footer">
    <a href="logout.php" title="LogOut" class="btn btn-info btn-lg" style="float: center; background-color: rgb(83, 82, 122);">
        <span class="glyphicon"></span>Log out
      </a>
      </div>
    </div>
    <script type="text/javascript" src="js/checkpw.js"></script>
    <script>
      document.getElementById("result").style.display = "none";
      document.getElementById("result_col3").style.display = "none";
      function myFunction() {
        document.getElementById("result").style.display = "block";
        document.getElementById("input").style.display = "none";
      }
      function tryAgain() {
        document.getElementById("result").style.display = "none";
        document.getElementById("input").style.display = "block";
      }
      function myFunction_col3() {
        document.getElementById("result_col3").style.display = "block";
        document.getElementById("input_col3").style.display = "none";
        
      }
      function tryAgain_col3() {
        document.getElementById("result_col3").style.display = "none";
        document.getElementById("input_col3").style.display = "block";
      }
    </script>
</body>
</html>