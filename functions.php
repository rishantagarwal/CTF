<?php
include 'ques.php';
include 'hint.php';
session_start();

function encrypt($flag)
{
$salt=$flag;
$flag_generated=sha1($_SESSION['userid'].$salt);
return $flag_generated;
}

function currentime()
{
       date_default_timezone_set('IST');
       $dateFormat = "g:i a";
       $today= time();
       $today=date($dateFormat,$today); 
       return $today;
}
 
function asd()
{
$c = $_SERVER["PHP_SELF"];
$parts = Explode('gui', $c);
$c=$parts[1];
$parts= Explode('.',$c);
$c=$parts[0];
return $c;
}

?>