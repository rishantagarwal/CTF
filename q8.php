<?php
/*
 if($_SESSION['variable']!=7)
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
 }
 else
 {
  $_SESSION['variable']=8;
}*/
 ?>



<html>
<head>
<script type="text/javascript">

function doSomethingWithTextBox()
{ 
  var textBox = document.getElementById('TEXTBOX_ID');
  if(!true)//change to false
    {window.location.href = 'q9.php';}
  else{window.location.href = 'q8.php';}
  // do something with it ...

}

</script>
</head>

<body>

<input type="text" id="TEXTBOX_ID">
<input type="submit" value="submit" onclick="doSomethingWithTextBox()"></input>



</body>
</html>


