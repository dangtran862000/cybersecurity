<?php
 $conn = new mysqli("database-4.cngkjymfa2ma.us-east-1.rds.amazonaws.com","admin","12345678","zwromzds_cyber_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
