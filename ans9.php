<?php
 session_start();
 ?>
<?php

$str=$_GET['input'];

if($str==$_SESSION['flag'])//flag is the password
{$sum="UR CRAP";
}
else
{


$char=preg_split('//', $str, -1);
$sum=0;


for($j=1;$j<=strlen($str);$j++)
  {	if($char[$j]=='a' || $char[$j]=='e' || $char[$j]=='i'|| $char[$j]=='o'|| $char[$j]=='u'|| $char[$j]=='A'|| $char[$j]=='E'|| $char[$j]=='I'|| $char[$j]=='O'|| $char[$j]=='U')
  	{

		$sum+=$j;
		
	}
	
	}
	
		

}
echo $sum;