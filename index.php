<?php
if(isset($_POST['flag']))
{
echo 'hello';
if($_POST["pass"]=="LOLAPE")
	{
	header('Location:q8.php');
	}
	else
	{
	header('Location:abc.php');
	}
}	
	


?>

<html>
<body>
<a href="./q7.html" target="_blank" >flag</a> 
		<form action="index.php"  method="post">
		FLAG: <input type="password" name="pass"> </input>
		<input type="submit" value="Submit" name="flag"> </input>
		</form>
</body></html>