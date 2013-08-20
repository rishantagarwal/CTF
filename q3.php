<?php include("functions.php")?>
<?php include("connections.php")?>
<?php  $_SESSION['userid']="navneet1234";
$flag=encrypt(question3);  ?>

<?php
 /* if($_SESSION['variable']!=2)
 {
  if($_SESSION['variable']==1)
 header('Location:que1.php');
 if($_SESSION['variable']==2)
 header('Location:que2.php');

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
 }
 else
 {
  $_SESSION['variable']=3;
} */
?>
<?php 
echo "<!--"."FLAG IS :".$flag."   -->";
?>

<html>
<head>
<title>BITS Pilani CTF LEVEL1 QUESTION2</title>
<link rel="stylesheet" type="text/css" href="position.css">
<script language=JavaScript>
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
</script>

<script language="javascript">
function onKeyDown() {
  // current pressed key
  var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
  if (event.ctrlKey && (pressedKey == "u" ||pressedKey == "i"
                        )) {
    // disable key press porcessing
    event.returnValue = false;
  }
} // onKeyDown
</script>
</head>
<body  onkeydown="onKeyDown()">
<center><div class="question">
<p>SQL stands for Structured Query Language. It is very high level language,I mean close to humans.
Like SELECT,INSERT,DELETE,UPDATE queries are used to select,add data,delete data,update data
respectively.SQL is used to
design the databses.</p>
</form>
</div></center>
</body>
</html>
