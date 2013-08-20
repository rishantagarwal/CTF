<?php
 session_start();
 ?>
<?php
if(isset($_POST["submit"]))
{
if($_POST['vote']=="2500")
	{
	header('Location:q28.php');
	}
}
?>
<?php
/*
 if($_SESSION['variable']!=26)
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
 elseif($_SESSION['variable']==23)
 header('Location:ques23.php');
  elseif($_SESSION['variable']==24)
 header('Location:ques24.php');
   elseif($_SESSION['variable']==25)
 header('Location:ques25.php');
elseif($_SESSION['variable']==26)
 header('Location:ques26.php');

 }
 else
 {
  $_SESSION['variable']=27;
}*/
?>
<html>
<head>
<title>Level 2 question 6</title>
<script type="text/javascript">
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
</script>
</head>
<body>

<p>You have been really very brilliant to reach here. but others are to equally brilliant.</p>
<p>So make judgement easier, We will consider the person who has greater votes...</p>
<p>Are you thinking how???.</p>
</br>
<p>this is a voting panel. according to your credibility you have to vote your self and get exactly 2500 points to go to next level</p>
<p>so keep posting until your score reaches 2500</p>
<form action="q27.php"  method="post">
<input id="slider1" type="range" min="100" max="500" step="10" onchange="printValue('slider1','rangeValue1')"/>
<input id="rangeValue1" type="text" value="300" size="2"/>
<input type="submit" value="Submit" name="submit"></input>
</form>
</body>