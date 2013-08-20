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
				$_SESSION['variable']//extract from database in which question he is
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
<html>
 <body>
<!--<tr>
   <td> <h3><font color="white" face="Script MT Bold">USERNAME</h3></font></td>
   <td> <h3><font color="white" face="Script MT Bold">PASSWORD</h3></font></td>
	</tr> 
	<tr>
	<td> <input type="text" name="username"></td>
	<td> <input type="password" name="password"></td>
	<td><input type="submit" value="LOGIN"></td>
	</tr>
	<tr>
	<td><input type="checkbox"><font color="white" face="Script MT Bold">keep me logged</font></td>
	<td><font color="white" face="Script MT Bold">forgot your password</font></td>
	</tr>
	</table>
	</form>
  </div>-->
  <div class="background">
  <div class="signup">
 <fieldset>
 <legend align="center"><h2>SIGN UP</h2></legend>
<form name="registration" action="home.php" onsubmit="return validate_form();" method="POST"> 
<h3>Member1:<input type="text" name="member1"></td></h3>
 <h3>Member2:<input type="text" name="member2"></h3>
 <h3>Team name:<input type="text" name="teamname"></h3>
 <h3>EMAIL:<input type="text" name="email"></h3> 
 <h3>Phonenumber:<input type="text" name="pno"></h3>
<h3>PASSWORD:<input type="password" name="password"></h3>
<h3>CONFIRM PASSWORD:<input type="password" name="confirmpassword"></h3>
<input type="submit" value="SIGN UP" name="submit">
</form>
</fieldset>
</div>
</div>
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

</script>
</body>
</html>
