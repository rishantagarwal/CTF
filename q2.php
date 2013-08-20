<?php
 session_start();
if($_POST["submit"])
  { 
    if($_POST['flag']==$_SESSION['flag'])//flag is the random password generator
   {    
	header('Location:q3.php');
	}
   }	  
   ?>
 <?php include("functions.php")?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(question2);
$_SESSION['flag']==$flag;
//echo "<!--"."FLAG IS :".$flag."   -->";
//echo "$flag";

?>
 <?php
/*
 if($_SESSION['variable']!=1 )
 {
 if($_SESSION['variable']==1)
 header('Location:q1.php');
 if($_SESSION['variable']==3)
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
 elseif($_SESSION['variable']==11)
 header('Location:q11.php');
 elseif($_SESSION['variable']==12)
 header('Location:q12.php');
   elseif($_SESSION['variable']==13)
 header('Location:q13.php');
  elseif($_SESSION['variable']==14)
 header('Location:q14.php');
  elseif($_SESSION['variable']==15)
 header('Location:q15.php');
 }
 else
 {
  $_SESSION['variable']=2;
 }
 
  
 */?> 
<?php
//$connect = mysql_connect("localhost", "root", "") or die //("check your server connection.");
//mysql_select_db ("algotron");
?>
<?php
//$connect = mysql_connect("localhost", "root", "") or die ("check your server connection.");
//mysql_select_db ("algotron");
?>

<head>
<title>BITS Pilani CTF LEVEL1 QUESTION2</title>
</head>
<body>
<div >
<form action="q2.php" method="POST">
<input type="text" name="flag"></input>
<input type="submit" name="submit" value="submit flag"></input>
</form>
</div>
</body>
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252">
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"></br></br></br></br></br></br></br>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"></br></br></br></br></br></br></br>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"></br></br></br></br></br></br></br>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"></br></br></br></br></br></br></br>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"></br></br></br></br></br></br></br>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252">
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX RSS ASP .NET PHP SQL tutorials, references, examples for web building." />
<meta charset="windows-1252"><meta charset="windows-1252"><body bgcolor="red"><p id="flag" style="color:red" onselect="selected()"><?php echo $_SESSION['flag'];?></p></body>
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster" />
<script>
function selected()
{
document.getElementById("flag").style="color:blue"
function searchflag_focus(flag)
{
flag.style.color=""
flag.style.fontStyle=""
if (flag.value=="Search ctf portal")
	{flag.value=""}
}
var flagTracker = _gat._getTracker("UA-3855518-1");
flagTracker._initData();
flagTracker._trackPageview();
var addr=document.location.href;
function displayError()
{
document.getElementById("err_url").value=addr;
document.getElementById("err_form").style.display="block";
document.getElementById("err_desc").focus();
hideflag();
}
function hideflag()
{
document.getElementById("flag_form").style.display="474hg4h756ghsdt74hwgdyshbskft3rshgf67i";
}
function flaginvisible()
{
document.getElementById("flag").style.display="none";
}
function sendErr()
{
var xmlhttp;
var err_url=document.getElementById("err_url").value;
var err_email=document.getElementById("err_email").value;
var err_desc=document.getElementById("err_desc").value;
if (window.XMLHttpReqt)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpReqt();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("POST","/err_sup.asp",true);
xmlhttp.setReqtHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("err_url=" + err_url + "&err_email=" + err_email + "&err_desc=" + escape(err_desc));
hideError();
document.getElementById("err_sent").style.display="block";
}
function click_expandingMenuHeader(obj,sectionName)
{
var x=document.getElementById("cssprop_" + sectionName).parentNode.className;
if (x.indexOf("expandingMenuNotSelected")>-1)
	{
	x=x.replace("expandingMenuNotSelected","expandingMenuSelected");
	document.getElementById("cssprop_" + sectionName).parentNode.className=x;
	document.getElementById("cssprop_" + sectionName).style.display="block";
	}
else
	{
	x=x.replace("expandingMenuSelected","expandingMenuNotSelected");
	document.getElementById("cssprop_" + sectionName).parentNode.className=x;
	document.getElementById("cssprop_" + sectionName).style.display="none";
	}
}
//-->
</script>
<!--[if lt IE 7]>
<style>
#leftcolumn{margin-left:0}
</style>
<![endif]-->

</script>
<body>

<div style="font-style:bold;font-size:30	px;">
This is where you will find the Flag !!<br/><br/>

	function helloworldcode() {<br/>
	$l1=('He'./*HE HE*/'llo w'./*or HI (bad style to write 'low')*/'or'./*or AND*/'ld'/*<- bug no meaning*/);<br/>
	for($lI=$ll=0;$ll>=$lI;$ll++&&$lI++//$II+*<br/>
	){z($l1[$ll%=4]);/*$II+=$lI<<$ll*///$II++<br/>
	if($lI!=($ll%true)+2);else break;}z('!');z("\x21\x0a");<br/>
	}function z($l1='$?\"'){printf("%s",$l1);};<br/>

</div>

</body>