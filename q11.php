
<?php
 if($_SESSION['variable']!=10)
 {
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
  $_SESSION['variable']=11;
}
 ?>


<?php
if(isset($_POST['flag']))
{
echo 'hello';
if($_POST["pass"]=="images_can't_be_text")
	{
	header('Location:q12.php');
	}
	else
	{
	header('Location:q11.php');
	}
}	
	


?>

<html>
<body>
<a href="./flag.txt" target="_blank" >flag</a> 
		<form action="index.php"  method="post">
		FLAG: <input type="password" name="pass"> </input>
		<input type="submit" value="Submit" name="flag"> </input>
		</form>
</body></html>