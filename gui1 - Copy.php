<?php include("functions.php")?>
<?php include("connections.php")?>
<?php 
$flag=encrypt(question1);
if(isset($_POST["submit"]))
  { 
  if($_POST['flag']==$flag)
   {    
$today=currentime();
mysql_query("UPDATE userinfo SET q1='$today'
WHERE teamname='{$_SESSION['userid']}'");
	header('Location:gui2.php');
   }	 
   }
   ?>
<?php
$query=mysql_query("SELECT  * from userinfo where teamname='{$_SESSION['userid']}'");
$user=mysql_fetch_array($query);
?>
<?php

if(isset($_POST['skip']))
  {
    $skip=$user['skipcount'];
	$skip++;
	mysql_query("UPDATE userinfo SET skipcount='$skip'
WHERE teamname='{$_SESSION['userid']}'");
   header('Location:gui2.php');
  }
?>
<html><head>
    <title >LEVEL 0 </title>
<link rel="shortcut icon" href="./Javascript Scope Quiz_files/favicon.ico">
    <link rel="icon" type="image/gif" href="">

    <link href="./Javascript Scope Quiz_files/css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/css(1)" rel="stylesheet" type="text/css">

    <link href="./Javascript Scope Quiz_files/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/vs.css" rel="stylesheet" type="text/css">
    <link href="./Javascript Scope Quiz_files/style.css" rel="stylesheet" type="text/css">

   <style type="text/css"></style>
    
</head>

<body data-twttr-rendered="true">
    <div id="header" >
        CTF - Ethical HAcking conTEst 
        <div id="shareButtons">
		<table><tr><td ztyle="padding-top:100px;"><div id="avatartxt"><h1>HOBO</h1></div></td><td><div id="avatar"></div></td></tr></table>
        </div>
    </div>

    <div id="main">
        <div id="content"><h1>The Very Basics</h1>
<div id="intro">
    
        <p>Let's look at a basic example.  This example should be familiar (and predictable) to just about anyone with a bit of programming experience:</p>
    
</div>

<p id="question">When executed, what value will be alerted to the screen?</p>

<div id="questionForm" class="code">
    <p><a href="q1.php" target="_blank">GO FETCH THE FLAG</a></p>
        <form action="gui1.php" method="POST">
    <label for="ans-0">Enter the Flag :</label><input type="text" name="flag" id="codeDiv"><br><br>
		

    
    
</div>
<div style="text-align:center"><button type="submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false" name="submit"><span class="ui-button-text">Submit Answer!</span></button></div>
</form>
<div style="text-align:right">
</br>
<form action="gui2.php" action="post">
<button type="submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false" name="skip"><span class="ui-button-text">SKIP QUESTION!</span></button></div></form>
<p id="ansCorrect" style="display:none">Correct!</p>
<p id="ansIncorrect" style="display:none">Sorry, the correct answer is: <span class="code">7</span></p>
<div id="explanation" style="display:none">
    
        <p>What happens here is exactly as you might expect.  You declare a local variable and set its value to <span class="code">10</span>. Its value is indeed greater than <span class="code">5</span>, so you set its value to <span class="code">7</span>.  You then alert this new value, <span class="code">7</span>.</p>
    
</div>
<div style="text-align:center"><button type="button" id="nextButton" style="display:none" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Next!</span></button></div></div>
        <div id="sidebar"><div id="navigation">
    <div id="progressBar">
        <span id="correct">0</span>
        <span id="wrong">0</span>
    </div>
    <ol>
        
        <div id="opened">
            
                
                <li class="information" >LEVEL 0</li>
            
                
               <?php 
			       echo " <li class='current'  >"."Question 1"."</li>";
				   echo "</div>";
				    echo " <div id='locked'>" ;
     			   echo " <li   >"."Question 2"."</li>";
                   
                  
               echo " <li >"."Question 3"."</li>";
            
                echo " <li >"."Question 4"."</li>";
            
            echo " <li >"."Question 5"."</li>";
            
             echo " <li >"."Question 6"."</li>";
            
                echo " <li >"."Question 7"."</li>";
            
                 echo " <li >"."Question 8"."</li>";
				echo " <li >"."Question 9"."</li>";
            
                 echo " <li >"."Question 10"."</li>";
             echo " <li >"."Question 11"."</li>";
			 
			 
			 ?>
        </div>
    </ol>
</div></div>
    </div>

    <div id="logoDiv">  <br/><br/><br/><br/>         </div>
	



</body></html>