<?php
session_start();
include("functions.php");
$_SESSION['userid']="navneet1234";
$flag=encrypt(question5);
echo "FLAG IS:".$flag;
?>