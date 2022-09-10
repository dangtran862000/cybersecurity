<?php 
  session_start();
  if (!isset($_SESSION["admin_login"])) {
    header("location:admin_login.php");
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

  @media screen and (min-width: 1200px) and (max-width: 2500px) {
    
    .col1 {
        height: 900px;
    }
    .col2 {
        height: 1100px;
    }
  }
  @media screen and (min-width: 1825px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 1250px;
    }
  }

  @media screen and (min-width: 2300px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 1450px;
    }
  }

  @media screen and (min-width: 2900px) {
    
    .col1 {
        height: 1450px;
    }
    .col2 {
        height: 2000px;
    }
  }

  @media screen and (max-width: 1385px) {
    
    .loginbutton {
      margin-top:120%;
    }

    .header-right{
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
    .col2 {
        display: none;
    background-color: rgb(219, 226, 245); /* Make elements inside the container behave like table cells */
      width: 100%;
      height: 600px;
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

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
#customers td {

  background-color: #f2f2f2;

}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>


<body>

  <div class="header">
      <img class="imgheader" src="Image\iconCODE-FINAL-RGB-FULL - original.png"></img>

  <div class="header-right">
    <a href="admin.php">Refresh</a>
    <a href="logout_admin.php">Log out</a>
  </div>

    </div>
    <div style="background-color: rgb(219, 226, 245); padding-top: 3%; padding-bottom:10%">
      <div>
        <div style="margin-top: 2%; margin-left: 15%; margin-right:15%"> 
        <h2>SUMMARY TABLE OF PLAYERS</h2>
         <?php
        include 'config.php';
        $sql_question = "SELECT * FROM user";

        $sql_count = "SELECT * FROM user WHERE role='user'";
        $sql_count_hooked = "SELECT * FROM user WHERE hooking=1 AND role='user'";
        $sql_count_top3 = "SELECT user_name,phishing_result FROM user WHERE role='user' order by phishing_result DESC LIMIT 3 ";

        if ($result_count = mysqli_query($conn, $sql_count)) {

            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result_count );
            
            ?><h4 style="margin-top:3%">THE TOTAL PLAYERS (without ADMIN): <?php echo $rowcount;?> players</h4><?php
        }
        if ($result_count_hooked = mysqli_query($conn, $sql_count_hooked)) {

          // Return the number of rows in result set
          $rowcount_hooked = mysqli_num_rows( $result_count_hooked );
          
          ?><h4 style="margin-top:3%">THE HOOKED PLAYERS: <?php echo $rowcount_hooked;?>/<?php echo $rowcount;?> players</h4><?php
        }
        ?><h4 style="margin-top:3%">THE TOP 3 PLAYERS OF PHISHING GAME: </h4><?php
        $top3_query = mysqli_query($conn,$sql_count_top3);
        $user_top_query = $conn->query($sql_count_top3);
        $number_top = 0;
        if(mysqli_num_rows($top3_query)>0) {
          while($top3_query = $user_top_query->fetch_assoc()) { 
            ?><h5 style="margin-left: 5%"><?php echo $number_top+=1;?>. <?php echo $top3_query["user_name"];?> - <?php echo $top3_query["phishing_result"];?> points</h5><?php
          }
        }
        ?>  
        <div  style="margin-top: 5%">
        <?php 
         include 'config.php';
        $sql_question = "SELECT SUM(login_count) FROM user";
        $user_question = mysqli_query($conn,$sql_question);
        $rand_quesiton = $conn->query($sql_question);
        ?>
        <?php
        if(mysqli_num_rows($user_question)>0) {
            while($origin_question = $rand_quesiton->fetch_assoc()) {
                ?><h4 style="margin-top:3%; text-align: right">THE TOTAL LOGIN COUNT: <?php echo $origin_question["SUM(login_count)"];?></h4><?php
              }
        }

        ?>
        <?php 
         include 'config.php';
        $sql_question = "SELECT * FROM user";

        $array_questions = [];
        $user_question = mysqli_query($conn,$sql_question);
        $rand_quesiton = $conn->query($sql_question);
        ?> <table id="customers">
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Login count</th>
          <th>Phishing Result</th>
          
        </tr> <?php
        if(mysqli_num_rows($user_question)>0) {
            while($origin_question = $rand_quesiton->fetch_assoc()) {
                ?>  <tr>
                <td><?php echo $origin_question["user_name"];?></td>
                <td><?php echo $origin_question["email"];?></td>
                <td><?php echo $origin_question["login_count"];?></td>
                <td><?php echo $origin_question["phishing_result"];?></td>
                
              </tr> <?php
              }
        }

        ?>
        </table>
        
         <?php
                if(isset($_POST['buttondelete'])) { 
                  include 'config.php';
                    $sql = "DELETE FROM user
                    WHERE  role='user'";
                    mysqli_query($conn,$sql);
                    ?>
                      <script type="text/javascript">
                      window.location.href = 'admin.php';
                      </script>
                    <?php
                }
                ?>  
                <form method="post">

                        <input type="submit" name="buttondelete"
                                value="DELETE ALL USERS DATA" style="color: black; background-color: #FAC800; padding: 5px 10px; margin-top: 5%"/>
                    </form>
        </div>
        
        </div>
      </div>
      <div class="col3" >
        <div class = "container">
            <div>
            <h1 style="text-align: center; float: center; margin-left: 15%; margin-right:15%" class = "center"></h1>
                <h1 style="text-align: center; float: center; margin-top: 10%; margin-left: 10%; margin-right:10%; font-family:courier,arial,helvetica; font-size: 20px;" class = "center">MÀN HÌNH ĐANG BỊ THU NHỎ, ẢNH HƯỞNG ĐẾN TRẢI NGHIỆM CỦA BẠN</h1>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">VUI LÒNG SỬ DỤNG TRÌNH DUYỆT WEB TRÊN MÁY TÍNH (PC/LAPTOP)</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">MỞ TOÀN MÀN HÌNH CỦA TRÌNH DUYỆT WEB</h3>
                <h3 style="text-align: center; float: center; margin-top: 5%; margin-left: 10%; margin-right:10%; font-family:arial; font-size: 30px;" class = "center">ĐỂ CÓ TRẢI NGHIỆM TỐT NHẤT KHI CHƠI GAME</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
      </div>

    </div>


</body>
</script>

</html>