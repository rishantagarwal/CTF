<?php
if(isset($_POST["submit"]))
{
$agent=$_SERVER['HTTP_USER_AGENT'];


if($agent=="Opera/9.80 (\$OS) Presto/\$PRESTO_VERSION Version/\$VERSION")
	{
	header('Location:q17.php');
	}
}
?>
<?php
/*
 if($_SESSION['variable']!=15)
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
  elseif($_SESSION['variable']==14)
 header('Location:ques14.php');
   elseif($_SESSION['variable']==15)
 header('Location:ques14.php');


 }
 else
 {
  $_SESSION['variable']=16;
}*/
?>
<html>
<head>
<title>Level 1 question 2</title>
</head>
<body>

<p>Change your user agent to "Opera/9.80 ($OS) Presto/$PRESTO_VERSION Version/$VERSION"</p>
<form action="q16.php"  method="post">
<!--<input type="password" name="flag" value="hello"></input>-->
<input type="submit" value="Submit" name="submit"></input>
		</form>
</body>
<html>