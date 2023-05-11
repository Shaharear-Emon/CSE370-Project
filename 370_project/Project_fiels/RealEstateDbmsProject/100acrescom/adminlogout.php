<?php
session_start();
unset($_SESSION['aemail']);
header("location:Login.php");
?>