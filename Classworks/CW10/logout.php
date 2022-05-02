<?php
session_start();
session_destroy();
//redirecting to login page
header("location:login.php");
?>
