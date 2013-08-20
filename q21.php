<?php
if(isset($_POST["submit"]))
 {
 
     $x=trim($_POST['flag']);
    if(trim($_POST['flag'])=="CTF $ # *() in APOGEE 2k13")
	   { header('Location:q22.php');}

 }
?>
<?php
/*
 if($_SESSION['variable']!=20)
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


 }
 else
 {
  $_SESSION['variable']=21;
}*/
?>
<?php
$u="CLICK HERE for flag";
echo "<li><a href=\"q21.php?subj=".urlencode("CTF $ # *() in APOGEE 2k13")."\">{$u}</a></li>";
//for decoding the url:after % consider the 2 digits then convert it to hexa to decimal then ascii is its decimal value
//we can get ascii from the browser
?>

<html>
<body>
<form action="q21.php" method="POST">
<p>the flag is :<input type="text" name="flag"></input></p>
<p><input type="submit" name="submit" value="submit"></input></p>
</form>

</body>
</html>