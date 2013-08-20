<?php include("functions.php")?>
<?php include("connections.php")?>
<?php

 if($_SESSION['variable']!=8)
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
       $today=currentime();
    mysql_query("UPDATE userinfo SET q8='$today'
WHERE teamname='{$_SESSION['userid']}'");
  $_SESSION['variable']=9;
}
 ?>
<?php
//$connect = mysql_connect("localhost", "root", "") or die ("check your server connection.");
//mysql_select_db ("algotron");
?>



<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(question9);
 $_SESSION['flag']=$flag;
 echo "The flag is:".$flag;
?>
<?php
if(isset($_POST["flagsubmit"]))
 {
 $str=$flag;//flag is the password

 $char=preg_split('//', $str, -1);
$sum=0;


for($j=1;$j<=strlen($str);$j++)
  {	if($char[$j]=='a' || $char[$j]=='e' || $char[$j]=='i'|| $char[$j]=='o'|| $char[$j]=='u'|| $char[$j]=='A'|| $char[$j]=='E'|| $char[$j]=='I'|| $char[$j]=='O'|| $char[$j]=='U')
  	{

		$sum+=$j;
		
	}
	
	}
	//echo $sum;
   if($_POST['FLAG']==$sum)
      {
	    header('Location:q10.php');
	   }

}	   
	   
	   

?>

 <html>
 <body>
 <head>
  <script language="javascript" src="jquery-1.6.1.min.js"></script>
	  <script type='text/javascript' language="javascript">
	  	function getdata()
	{
		var str1=document.forms["testform"]["input"].value;
		$.get("ans9.php",{input:str1},function(resp){
		document.getElementsByName("output")[0].value=resp;
		});
	}

function testForEnter() 
{    
	if (event.keyCode == 13) 
	{        
		event.cancelBubble = true;
		event.returnValue = false;
         }
} 
	</script>	
</head>
<form method='POST' action='q9.php' name='testform'>
  <h2><font color="Black" >INPUT:</h2></font>
	 <input type="text" name="input"/>
	 <input type="button" value="SUBMIT" onclick="getdata()"/>  
 <h2><font color="Black" >OUTPUT:</h2></font>
	 <input type="text" name="output"/>
	 <h2><font color="Black" >flag</h2></font>
	  <h2><font color="Black" >INSERT FLAG:</h2></font>
	 <input type="text" name="FLAG"/>
	   <input type="submit" value="SUBMIT" name="flagsubmit" >
	 
	  
	 
</form>
	</body>
	</html>