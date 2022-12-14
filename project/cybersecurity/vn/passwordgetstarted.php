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
   
   .containerwordwall {
    display: block;
    margin-left: auto;
    margin-right: auto;
      position: relative;
      width: 100%;
      height: 30%;
      overflow: hidden;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

.responsive-iframewordwall {
  display: block;
    margin-left: auto;
    margin-right: auto;
      text-align:center;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
   .imgheader_responsive {
    display: none;
  }

  @media screen and (max-width: 1385px) {
    .imgheader_responsive {
      width: 50%;
      display: block;
      margin-left: 25%;
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
  width: 28%; 
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
      width: 50%;
      display: block;
      margin-left: 25%;
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
}

/* Clear floats after the columns */
.subrow:after {
  content: "";
  display: table;
  clear: both;
}


</style>

</head>
<script>sessionStorage.setItem("sound", "on");</script>
<body>
    <img class="imgheader_responsive" src="Image\iconCODE.png" ></img>
    <div class="header">
      <img class="imgheader" src="Image\iconCODE.png" ></img>

  <div class="header-right">
   <a  style="padding: 30px 50px" href="phishinggetstarted.php">TRUY T??M S??? TH???T</a>
  
    <a  style="padding: 30px 50px" class="active" href="passwordgetstarted.php">TR?? CH??I M???T KH???U</a>
    <a  style="padding: 30px 50px" href="cyberiskgetstarted.php">T???N C??NG M???NG</a>
    <a style="padding: 30px 50px" href="logout.php">????NG XU???T</a>
  </div>

    </div>

    <div  style=" padding-top: 0.5%; padding-bottom:10%; min-height:80%;">
   
        <div class="colresponsive" style="margin-top: 3%; margin-left: 5%; margin-right:5%">
        <img src="Image\password.jpg" style="width: 100%; float: center; margin-top:0.5%" onContextMenu="return false;"></img>
        <div style="margin-top: 3%; margin-left: 15%; margin-right:15%">
        <div class="subrow" style="margin-top: 3%">
          <div class="subcolumn">
            <h2 style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160;">LU???T CH??I: </h2>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160;">C??c b???n tr??? l???i c??u h???i. Tr??? l???i c??ng nhanh c??ng ???????c ??i???m cao</li> </h4>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160;">Ngo??i ra c?? nh???ng l???a ch???n nh??: </li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:10%; font-family:arial; color:  #222160;"><strong>x2 ??i???m s???:</strong> b???n s??? ???????c g???p ????i ??i???m c???a ph???n n??y</li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:10%; font-family:arial; color:  #222160;"><strong>50:50: </strong>gi???m m???t n???a l???a ch???n </li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:10%; font-family:arial; color:  #222160;"><strong>Th??m th???i gian: </strong>th??m 2??? cho ng?????i ch??i.</li> </h4>
            <div class="subrow" style="margin-top: 3%">
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #222160;">??? v??ng bonus round, c??c b???n c?? c?? h???i ???????c. Y??u c???u c??c b???n tinh m???t xem v??? tr?? th??? m??nh mu???n ??? ????u v?? th??? s??? ???????c x??o tr???n  </li> </h4>
                      <div class="subcolumn">
            
            <h4> <li style="margin-top: 5%; margin-left:10%; font-family:arial; color:  #222160;">??i???m th?????ng: </li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:30%; font-family:arial; color:  #222160;">100 ??i???m</li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:30%; font-family:arial; color:  #222160;">200 ??i???m</li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:30%;; font-family:arial; color:  #222160;">50 ??i???m  </li> </h4>
            </div>
            <div class="subcolumn">
            <h4> <li style="margin-top: 5%; margin-left:10%; font-family:arial; color:  #222160;">??i???m ph???t: </li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:30%; font-family:arial; color:  #222160;">x3 t???c ?????</li> </h4>
            <h4> <li style="margin-top: 1%; margin-left:30%; font-family:arial; color:  #222160;">x2 t???c ?????</li> </h4>
            </div>
            </div>
          </div>
          <div class="subcolumn">
          <h2 style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #E61E2A;">L??U ??: </h2>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color: #E61E2A;">Ho???t ?????ng n??y ch??? d??nh cho m???c ????ch gi??o d???c. ?????i h???c RMIT Vi???t Nam s??? kh??ng l??u b???t k??? th??ng tin c???a ng?????i ch??i.</li> </h4>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #E61E2A;">????? ?????m b???o an to??n cho th??ng tin c?? nh??n c???a b???n, kh??ng chia s??? c??u tr??? l???i c???a b???n v???i nh???ng ng?????i ch??i kh??c.</li> </h4>
            <h4> <li style="margin-top: 5%; margin-right:10%; font-family:arial; color:  #E61E2A;">Cu???i bu???i ch??i, b???ng x???p h???ng s??? ???????c hi???n ra v???i s??? ??i???m. Ai x???p h???ng cao nh???t s??? l?? ng?????i th???ng v??ng password. 
</li> </h4>
          </div>
        </div>
        <div style="margin-top: 8%; margin-left: 0%; margin-right:0%">
            <h2 style="margin-top: 5%; margin-bottom: 5%; margin-right:10%; font-family:arial; color:  #222160;">VIDEO H?????NG D???N CH??I:</h2>   
        <div class="containerwordwall"> 
            <video class="responsive-iframewordwall" src="Image\video password vie.mp4" autoplay loop frameborder="0" allowfullscreen onContextMenu="return false;"></video>
        </div>
        <div class="box-root padding-top--44 padding-bottom--0 flex-flex flex-justifyContent--center">
        <form id="stripe-login" action="passwordwordwall.php" >
                <div class="field padding-bottom--12" style="margin-top:20%">
                <button class="loginbutton" type = "submit" style="color: black; background-color: #FAC800; padding: 15px 100px">NH???N V??O ????Y ????? B???T ?????U CH??I</button>
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
                <h1 style="text-align: center; float: center; margin-top: 15%; margin-left: 10%; margin-right:10%; font-family:courier,arial,helvetica; font-size: 20px;" class = "center">THE SCREEN IS DECREASING RESOLUTION, AFFECTING YOUR EXPERIENCE</h1>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">PLEASE USE WEB BROWSER ON PC OR LAPTOP</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">PLEASE OPEN FULLSCREEN OF WEB BROWSER</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">FOR THE BEST PLAYING GAME EXPERIENCE</h3>

                </div>
                </div>
          
            </div>
            </div>
        </div>
      </div>

    </div>
    
    <script>
    function soundButton() {
      var txt;
      if (confirm("DECTECTING PHISHING GAME CONTAIN MUSIC !!!\n \nPress OK if you want to OPEN the sound\nPress CANCEL if you want to MUTE the sound")) {
        txt = "You pressed OK!";
        sessionStorage.setItem("sound", "yes");
      } else {
        txt = "You pressed Cancel!";
        sessionStorage.setItem("sound", "no");
      }
      
    }
    </script>
    
    <footer style="padding-top:24px; padding-bottom: 24px; background-color: #222160; margin-top:auto; font-size: 14px; width: 100%;">
            <div class="subrow">
            <div class="subcolumn" style="text-align: right">
              <span><a style="color: white; text-align: right; font-size: 14px; margin-right: 5%" href="https://code-rmit.edu.vn/">code-rmit.edu.vn</a></span>
              <span><a style="color: white; text-align: right; font-size: 14px; margin-right: 5%" href="https://www.rmit.edu.au/research/centres-collaborations/cyber-security-research-innovation">cyber-security-research-innovation</a></span>
              </div>
              <div class="subcolumn">
              <span><a style="color: white; text-align: left; font-size: 14px; margin-left: 5%" href="https://code-rmit.edu.vn/">RMIT Centre of Digital Excellent (CODE)</a></span>
              <span><a style="color: white; text-align: left; font-size: 14px; margin-left: 5%" href="https://www.rmit.edu.au/research/centres-collaborations/cyber-security-research-innovation">RMIT Centre for Cyber Security Research and Innovation</a></span>
              </div>
              
            </div>
</footer>

</body>


</html>