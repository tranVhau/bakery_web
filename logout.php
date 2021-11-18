<?php
include 'login_submit.php';
// include 'config.php';
    // session_start();
    // session_unset("user");
    // unset($_SESSION['user']);
    session_destroy();
    header('location: login.php');
?>