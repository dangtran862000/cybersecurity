<?php 
    session_start();
    unset($_SESSION['user_login']);
    unset($_SESSION['level']);
    unset($_SESSION['attempt']);
    unset($_SESSION['level_phishing']);
    // $_SESSION['questiontrue'] = array();
    header('location: login.php');
?>