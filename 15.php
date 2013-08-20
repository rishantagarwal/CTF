<?php
session_start();
?>
<?php include("functions.php");?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(level1question2);
echo "FLAG IS:"."  "."  ".$flag;
?>