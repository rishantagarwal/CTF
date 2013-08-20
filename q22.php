<?php include("functions.php");?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(question1);
if(isset($_POST["submitflag"]))
  { 
    if($_POST['flag']==$_SESSION['flag'])
   {    
	header('Location:q23.php');
	
	}
	 
   }
   ?>

<?php
/*
 if($_SESSION['variable']!=21)
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


 }
 else
 {
  $_SESSION['variable']=22;
}*/
?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(level2question1);
$_SESSION['flag']=$flag;
?>
<?php
$_SESSION['username']="navneet";
if(is_dir ($_SESSION['username'] ))//to check if directory exists ......navneet is the team name
  {
 // echo "Directory exists"; to check if directory exists
  file_put_contents('./navneet/password.txt', $flag);
  copy('C:\xampp\security\htdocs\.htaccess', './navneet/.htaccess'); 
  }
  else{mkdir("./{$_SESSION['username']}", 0700);}
  
  
  if(isset($_POST['submit']))
    { 
	   if ($_FILES["file"]["error"] > 0)
          {
               echo "Error: " . $_FILES["file"]["error"] . "<br>";
          }
	   $filename=$_FILES["file"]["tmp_name"] ;
	    move_uploaded_file($filename,"navneet/" . $_FILES["file"]["name"]);
	   
	}
	  
?>
<html>
<body>

<form action="q22.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
<form action="q22.php" method="POST">
<input type="text" name="flag"></input>
<input type="submit" name="submitflag"></input>
</form>

</body>
</html>