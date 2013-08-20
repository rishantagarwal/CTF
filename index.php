

<html><head>
    <title >CTF - Ethical HAcking conTEst </title>
<link rel="shortcut icon" href="./Javascript Scope Quiz_files/favicon.ico">
    <link rel="icon" type="image/gif" href="">

    <link href="./Javascript Scope Quiz_files/css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/css(1)" rel="stylesheet" type="text/css">

    <link href="./Javascript Scope Quiz_files/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/vs.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/style3.css" rel="stylesheet" type="text/css">

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
        
        <div id="shareButtons">
		
        </div>
    </div>

    <div id="main">
        <div id="content" style="width:92%;">

<h2 style="color:red; opacity:0.8;font-size:100px;font-family:hackor;border:2px dashed red; border-radius:5px;"><text style="text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capture The Flag <br/>&nbsp;Ethical &#9760; Hacking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contest</text></h2>



<form method="post" action="register.php">
<input type="submit" name="Proceed" value="Proceed" style="text-align:center;"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InformATion Systems association 



    
    </div>
	
	    <div id="logoDiv">
		<br/><br/><br/>
       EVENT BY INFORMATION SYSTEMS ASSOCIATION
    </div>

</body></html>