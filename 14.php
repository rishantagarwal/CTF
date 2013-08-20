<?php
session_start();
include("functions.php");
$_SESSION['userid']="navneet1234";
$flag=encrypt(level1question1);
echo "FLAG IS:".$flag;
?>