
<?php

 if($_SESSION['variable']!=11)
 {
 if($_SESSION['variable']==1)
 header('Location:q1.php');
 if($_SESSION['variable']==2)
 header('Location:q2.php');
 elseif($_SESSION['variable']==3)
 header('Location:q3.php');
 elseif($_SESSION['variable']==4)
 header('Location:q4.php');
 elseif($_SESSION['variable']==5)
 header('Location:q5.php');
 elseif($_SESSION['variable']==6)
 header('Location:q6.php');
 elseif($_SESSION['variable']==7)
 header('Location:q7.php');
 elseif($_SESSION['variable']==8)
 header('Location:q8.php');
 elseif($_SESSION['variable']==9)
 header('Location:q9.php');
 elseif($_SESSION['variable']==10)
 header('Location:q10.php');
    elseif($_SESSION['variable']==13)
 header('Location:q13.php');
  elseif($_SESSION['variable']==14)
 header('Location:q14.php');
  elseif($_SESSION['variable']==15)
 header('Location:q15.php');

 }
 else
 {
  $_SESSION['variable']=12;
}
 ?>

<html>
<body><?php
if(isset($_POST['flag']))
{
if($_POST["pass"]=="flag")
	{
	header('Location:q13.php');
	}
else
	{
	header('Location:index.php');
	}
}	
	
echo '<a href="./flag.php" target="_blank" >flag</a> 
		<form action="q12.php"  method="post">
		FLAG: <input type="password" name="pass"> </input>
		<input type="submit" value="Submit" name="flag"> </input>
		</form>' ;

?></body></html>