<?php 
  session_start();
  if (!isset($_SESSION["user_login"])) {
    header("location:login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Cyber-Security Workshop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="logincss.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css-circular-prog-bar.css">
<style type="text/css">
   <?php include 'style.css'; ?>
   <?php include 'logincss.css'; ?>
   <?php include 'css-circular-prog-bar.css'; ?>
   
   
   .imgheader_responsive {
    display: none;
  }

  @media screen and (max-width: 1385px) {
    .imgheader_responsive {
      width: 25%;
      display: block;
      margin-left: 38%;
      margin-top: 2%;
      margin-bottom: 1%;
      margin-right: auto;
    }
    .imgheader {
    display: none;
  }
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

.imgheader {
  width: 15%; 
  float: left; 
  margin-top:0.5%;
}

@media screen and (max-width: 1200px) {
    
    .col1 {
        height: 900px;
    }
    .col2 {
        height: 1400px;
    }
  }
  @media screen and (min-width: 1200px) and (max-width: 2000px) {
    
    .col1 {
        height: 900px;
    }
    .col2 {
        height: 1400px;
    }
  }
  @media screen and (min-width: 2000px) and (max-width: 2500px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 1600px;
    }
    .loginbutton {
      margin-top:30%;
    }
  }
  
  @media screen and (min-width: 2501px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 2000px;
    }
    
  }

  @media screen and (max-width: 1024px) {
    .header-right{
      display: none;
    }
    
     .imgheader_responsive {
      display: none;
    }

    .imgheader {
      width: 40%;
      display: block;
      margin-left: 30%;
      margin-right: auto;
    }

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
    .colresponsive {
        display: none;
    }

    .col3 {
      background-color: rgb(219, 226, 245); /* Make elements inside the container behave like table cells */
      display: block;
      width: 100%;
      height: 600px;
    }
  }

  /* Create two equal columns that floats next to each other */
.subcolumn {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.subrow:after {
  content: "";
  display: table;
  clear: both;
}


</style>

</head>

<body>
    <img class="imgheader_responsive" src="Image\iconCODE-FINAL-RGB-FULL - original.png" ></img>
    <div class="header">
      <img class="imgheader" src="Image\iconCODE-FINAL-RGB-FULL - original.png" ></img>

  <div class="header-right">
  <a class="active" href="phishinggetstarted.php">Truy T??m S??? Th???t</a>
    <a  href="passwordgetstarted.php">M???t Kh???u</a>
    <a  href="instruction.php">H?????ng d???n</a>
    <a href="logout.php">Log out</a>
  </div>

    </div>

    <div class="colresponsive" style="background-color: rgb(219, 226, 245); padding-top: 0.5%; padding-bottom:10%">
      <div >
        <div style="margin-top: 3%; margin-left: 15%; margin-right:15%">
        <img src="Image\phishingbanner.png" style="width: 100%; float: center; margin-top:0.5%"></img>
        <div  style="margin-top: 3%">
          <div >
            <h2 style="margin-top: 5%; margin-right:10%; font-size: 50px; font-family:arial; color:  #222160;"><strong>LU???T CH??I: </strong></h2>
            <h4> <li style="margin-top: 2%; margin-right:10%; font-family:arial; color:  #222160; font-size: 40px;">M???i v??ng c?? 5 h??nh ???nh bao g???m 1 ???nh th???t & 4 ???nh c?? y???u t??? l???a ?????o. B???n c?? 60 gi??y ????? t??m & x??c nh???n ???nh th???t.</li> </h4>
            <!--<h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160;">T???ng c???ng c?? 10 v??ng. B???n c???n ch???n ????ng ??t nh???t 7 v??ng ????? v?????t qua th??? th??ch n??y. N???u kh??ng, b???n s??? ???????c y??u c???u ch??i l???i t??? ?????u.</li> </h4>-->

          </div>
          <div>
          
          </div>
        </div>
        
        <h2 style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160; font-size: 50px;"><strong> H?????NG D???N CH??I TRUY T??M S??? TH???T </strong></h2>
        <div>
          <div >
          <h4 style="margin-top: 2%; margin-right:10%; font-family:arial; color:  #222160; font-size: 40px;">B?????c 1: </h4>
          <img src="Image\phishinginstruction.png" style="width: 100%; float: center; margin-top:0.5%"></img>
          </div>
          <div >
          <h4 style="margin-top: 2%; margin-right:10%; font-family:arial; color:  #222160; font-size: 40px;">B?????c 2: </h4>
          <img src="Image\instructionphishing2.png" style="width: 100%; float: center; margin-top:0.5%"></img>
            
          </div>
        </div>
        <h2 style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #E61E2A; font-size: 50px;"><strong style="color: #E61E2A;">L??U ??: </strong></h2>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color: #E61E2A; font-size: 40px;">Ho???t ?????ng n??y ch??? mang t??nh gi??o d???c. CODE s??? kh??ng l??u tr??? b???t k??? th??ng tin g?? t??? ng?????i ch??i. </li> </h4>
            <h4> <li style="margin-top: 0%; margin-right:10%; font-family:arial; color:  #E61E2A; font-size: 40px;">Vui l??ng kh??ng chia s??? ????p ??n c???a m??nh cho ng?????i ch??i kh??c ????? ?????m b???o t??nh b???o m???t.</li> </h4>
        <div class="box-root padding-top--10 padding-bottom--0 flex-flex flex-justifyContent--center">
            
        <form id="stripe-login" action="phishingtest.php?choice=null" >
                <div class="field padding-bottom--24" style="margin-top:10%">
                <button class="loginbutton" type = "submit" style="color: black; background-color: #FAC800; padding: 15px 100px">B???T ?????U CH??I</button>
                </div>
              </form>
              
        </div>
        </div>
        </div>
      </div>
      <div class="col3" >
        <div class = "container">
            <div>
                <h1 style="text-align: center; float: center; margin-top: 15%; margin-left: 15%; margin-right:15%" class = "center"></h1>
                <h1 style="text-align: center; float: center; margin-top: 15%; margin-left: 10%; margin-right:10%; font-family:courier,arial,helvetica; font-size: 20px;" class = "center">M??N H??NH ??ANG B??? THU NH???, ???NH H?????NG ?????N TR???I NGHI???M C???A B???N</h1>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">VUI L??NG S??? D???NG TR??NH DUY???T WEB TR??N M??Y T??NH (PC/LAPTOP)</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">M??? TO??N M??N H??NH C???A TR??NH DUY???T WEB</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">????? C?? TR???I NGHI???M T???T NH???T KHI CH??I GAME</h3>

                </div>
                </div>
                <div class="box-root padding-top--48 padding-bottom--0 flex-flex flex-justifyContent--center">
        <form id="stripe-login" action="phishingtest.php?choice=null">
              </form>
              
        </div>
            </div>
            </div>
        </div>
      </div>

    </div>
    <div class="footer">
    <span><a href="https://code-rmit.edu.vn/">RMIT Centre of Digital Excellent (CODE)</a></span>
    <h4 style="display: block">Contact us</h5><a href="mailto:code@rmit.edu.vn"><h4 style="color: darkblue">code@rmit.edu.vn</h4></a><br>
      <div class="logout_footer">
      </div>
    </div>

</body>


</html>