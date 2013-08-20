<?php
/*
 if($_SESSION['variable']!=22)
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
 header('Location:ques15.php');
  elseif($_SESSION['variable']==16)
 header('Location:ques16.php');
  elseif($_SESSION['variable']==17)
 header('Location:ques17.php');
  elseif($_SESSION['variable']==18)
 header('Location:ques18.php');
  elseif($_SESSION['variable']==19)
 header('Location:ques19.php');
  elseif($_SESSION['variable']==20)
 header('Location:ques20.php');
   elseif($_SESSION['variable']==21)
 header('Location:ques21.php');
    elseif($_SESSION['variable']==22)
 header('Location:ques22.php');


 }
 else
 {
  $_SESSION['variable']=23;
}*/
?>

<html>
<head>
<title>Level 2 question 2</title>
</head>

<?php

if(isset($_SERVER['HTTP_REFERER']) && strstr($_SERVER['HTTP_REFERER'],"referer.php"))
{
	//header('Location:q3.php');
	echo '<a href="q24.php">click here to go to next level</a>';
}
else
{
	echo 'Access denied</br>';
	echo 'Access granted if you come from "referer.php"';
	
}


?>
</html>