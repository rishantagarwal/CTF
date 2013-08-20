<p>"<html>
<head>
<title>Level 1 question 3</title>
</head>
<body>
<?php
include 'welcome.php';
if(isset($_POST["submit"]))
{



if($_POST['flag']=="this_is_our_style")
	{
	
	header('Location:q4.php');
	}
	
else
	{
	header('Location:q3.php');
	}
	
}

?>
<a href='source.html' >source code</a>
<form action="q3.php"  method="post">
<input type="password" name="flag" ></input>
<input type="submit" value="Submit" name="submit"></input>
</form>
</body>"</p>