<?php
 session_start();
 ?>
<?php
if(isset($_POST['submit']))
{
if($_POST["flag"]==$_SESSION['FLAG'])
	{
	header('Location:q15.php');
	}
}	
?>
 <?php include("functions.php")?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(level1question1);
$_SESSION['FLAG']=$flag;
?>
<?php
/*

 if($_SESSION['variable']!=13)
 {
  if($_SESSION['variable']==1)
 header('Location:que1.php');
 if($_SESSION['variable']==2)
 header('Location:que2.php');
 elseif($_SESSION['variable']==3)
 header('Location:ques3.php');
 elseif($_SESSION['variable']==4)
 header('Location:ques4.php');
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

  elseif($_SESSION['variable']==15)
 header('Location:ques15.php');

 }
 else
 {
  $_SESSION['variable']=14;
}
*/ ?>
<html>
<head>
<title>Level 1 question 1</title>
</head>
<body>

<p>this flag even google bot can't find.</p>
<form action="q14.php"  method="post">
FLAG: 	<input type="password" name="flag"></input>
		<input type="submit" value="Submit" name="submit"></input>
		</form>
		


</body>
</html>