<?php include("functions.php")?>
<?php include("connections.php")?>
<?php 
if(isset($_POST['submit']))
  { 
    $mem1=addslashes(trim($_POST['member1']));
    $mem2=addslashes(trim($_POST['member2']));
    $tname=addslashes(trim($_POST['teamname']));
    $p=addslashes(sha1(trim($_POST['password']."pass")));
	$e=$_POST['email'];
	$pno=$_POST['pno'];

/*
*/

	           $query=mysql_query("SELECT  teamname from userinfo where teamname='$tname'");
	           if(!($user=mysql_fetch_array($query)))
			     {
	            $t=currentime();
			   	$sql="INSERT INTO userinfo (member1,member2,teamname,password,logintime,phonenumber) VALUES
				('$mem1','$mem2','$tname','$p','$t','$pno')";
				$_SESSION['userid']=$tname;//userid will be the teamname
				$_SESSION['variable']=1;//extract from database in which question he is
				// $results=mysql_query($sql);u
				 header('Location:rules.php');
				 if(!mysql_query($sql,$conn))
					{
						die('Error: ' . mysql_error());
					}}
			else
				{				  
                     echo "<h2>A user with  Teamname already exists please try another Teamname</h2>";
                     
			  }

        	   
  }
?>

<html><head>
    <title >CTF - Ethical HAcking conTEst </title>
<link rel="shortcut icon" href="./Javascript Scope Quiz_files/favicon.ico">
    <link rel="icon" type="image/gif" href="">

    <link href="./Javascript Scope Quiz_files/css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/css(1)" rel="stylesheet" type="text/css">

    <link href="./Javascript Scope Quiz_files/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/vs.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/style4.css" rel="stylesheet" type="text/css">

   <style type="text/css"></style>
    
</head>
<script type="text/javascript">
function validate_form()
{
var x=document.forms["registration"]["member1"].value;
var k=0;
if(x==null || x=="")
{
alert("member1 name is not filled");
k=1;
return false;
}
var pno=document.forms["registration"]["pno"].value;
if(pno==null || pno=="")
{
alert(" Phone number is not filled");
k=1;
return false;
}
var y=document.forms["registration"]["member2"].value;
if(y==null || y=="")
{
alert("member2 name is not filled");
k=1;
return false;
}
var z=document.forms["registration"]["teamname"].value;
if(z==null || z=="")
{
alert("Team name is not filled");
k=1;
return false;
}
var a=document.forms["registration"]["email"].value;
if(a==null || a=="")
{
alert("Please enter your email");
k=1;
return false;
}
var p=document.forms["registration"]["password"].value;
if(p==null || p=="")
{
alert("Password field is not filled");
k=1;
return false;
}
var q=document.forms["registration"]["password"].value;
var r=document.forms["registration"]["confirmpassword"].value
if(p!=r)
{
alert("Password and confirm password is not matching");
k=1;
return false;
}
for(i=0;i<document.registration.gender.length;i++)       
{ 
if(document.registration.gender[i].checked==false)
{
flag=1;
}
else {
flag=0;
break;
}
} 
if(flag==1)
{
alert("Please select your gender");
}
var t=document.forms["registration"]["year"].value;
var u=document.forms["registration"]["month"].value;
var v=document.forms["registration"]["day"].value;
if((t=="Year")||(v=="Day")||(u=="Month"))
{
alert("Please enter your date of birth");
k=1;
return false;
}
if(k==0)
return true;
}
</script>

<body data-twttr-rendered="true" style="background-image:url('./fb.gif');background-size:100% 100%;">
    <div id="header" >
        CTF - Ethical HAcking conTEst 
        <div id="shareButtons">
		
        </div>
    </div>

    <div id="main">
        <div id="content"><h1>Register </h1>
<div id="intro">
    <form name="registration" action="home.php" onsubmit="return validate_form();" method="POST"> 
<table>
<tr><td><h3>Member1:</td><td><input type="text" name="member1"></h3></td><td><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member2:</td><td><input type="text" name="member2"></h3></td></tr>
<tr></tr>
<tr><td><h3>Team name:</td><td><input type="text" name="teamname"></h3></td><td><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL:</td><td><input type="text" name="email"></h3> </td></tr>
<tr></tr>
<tr><td><h3>Phonenumber:</td><td><input type="text" name="pno"></h3></td><td><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD:</td><td><input type="password" name="password"></h3></td></tr>
<tr></tr>
<tr><td><h3>CONFIRM PASSWORD:</td><td><input type="password" name="confirmpassword"></h3></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Go Ahead !! &#9760;" name="submit"></td></tr>
<tr></tr>
</table>
</form>
</div>




<div style="text-align:center"><button type="button" id="nextButton" style="display:none" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Next!</span></button></div></div>
    
    </div>
	
	    <div id="logoDiv">
		<br/><br/><br/>
       EVENT BY INFORMATION SYSTEMS ASSOCIATION
    </div>

</body></html>