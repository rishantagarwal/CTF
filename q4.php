<?php include("functions.php")?>
<?php include("connections.php")?>

<?php
/* 
 if($_SESSION['variable']!=3)
 {
  if($_SESSION['variable']==1)
 header('Location:que1.php');
 if($_SESSION['variable']==2)
 header('Location:que2.php');
 elseif($_SESSION['variable']==3)
 header('Location:ques3.php');

 elseif($_SESSION['variable']==5)
 header('Location:ques5.php');
 elseif($_SESSION['variable']==6)
 header('Location:ques6.php');
 elseif($_SESSION['variable']==7)
 header('Location:ques7.php');
 elseif($_SESSION['variable']==8)
 header('Location:ques8.php');
 elseif($_SESSION['variable']==9)
 header('Location:ques9.php');
 elseif($_SESSION['variable']==10)
 header('Location:ques10.php');
 elseif($_SESSION['variable']==11)
 header('Location:ques11.php');
 elseif($_SESSION['variable']==12)
 header('Location:ques12.php');
    elseif($_SESSION['variable']==13)
 header('Location:ques13.php');
  elseif($_SESSION['variable']==14)
 header('Location:ques14.php');
  elseif($_SESSION['variable']==15)
 header('Location:ques15.php');
 }
 else
 {
  $_SESSION['variable']=4;
} */
 ?>

<!DOCTYPE html>
<html>
<head>
<title>BITS Pilani CTF LEVEL1 QUESTION2</title>
<link rel="stylesheet" type="text/css" href="position.css">
<style> 
div
{
width:100px;
height:100px;
position:relative;
animation:mymove 100s infinite;
animation-timing-function:linear;

/* Safari and Chrome */
-webkit-animation:mymove 1s infinite;
-webkit-animation-timing-function:linear;
}

@keyframes mymove
{
from {left:0px;}
to {left:"500px";}
}

@-webkit-keyframes mymove /* Safari and Chrome */
{
from {left:<?php echo 100*mt_rand(1,100)."px"?>;}
to {left:<?php echo 100*mt_rand(1,0)."px"?>;}
}
</style>
</head>
<body>

<div class="question">
<form action="gui5.php">
<input class="" type="submit" name="submit"></input></form></div>

</body>
</html>