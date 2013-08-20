<?php
$conn=mysql_connect("localhost","root","")or die ("check your server connection.");
$db=mysql_select_db("ctf",$conn);
if(!isset($_SESSION['userid'])){header('Location:index.php');}
?>