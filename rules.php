<?php include("functions.php")?>
<?php include("connections.php")?>
<?php
                echo $_SESSION['userid'];
				$query=mysql_query("SELECT  * from userinfo where teamname='{$_SESSION['userid']}'");
				if($result=mysql_fetch_array($query))
				 {
				$_SESSION['variable']=$result['qno']+1;
	
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
    <link href="./Javascript Scope Quiz_files/style2.css" rel="stylesheet" type="text/css">

   <style type="text/css"></style>
    
</head>

<body data-twttr-rendered="true">
    <div id="header" >
        CTF - Ethical HAcking conTEst 
        <div id="shareButtons">
		
        </div>
    </div>

    <div id="main">
        <div id="content"><h1>Instructions</h1>
<div id="intro">
    <ol>

	<li>Register yourself in the portal...</li>
	<li>Trying to copy friend answer will not help, flags are all spicy and salted :P</li>
	<li>Each question has a unique flag for a user.</li>
	<li>You can use any windows inbuilt software to open downloaded files.</li>
	<li>There are some input output scripts also available at script age for your use.</li>
	<li>Game has 5 levels.</li>
	<li>You are allowed to skip few questions in each and every level , but answering all will fetch you more points.</li>
	<li>In case of a tie, the person who answers first will be declared as a winner.</li>
</ol>
</div>

<p id="question">
<form method="post" action="intro.php">
<input class="ui-button-text" type="submit" name="Proceed" value="Proceed" style="text-align:center;"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InformATion Systems association 
</p>
<div id="questionForm" class="code">
    
  
    
    
</div>

<p id="ansCorrect" style="display:none">Correct!</p>
<p id="ansIncorrect" style="display:none">Sorry, the correct answer is: <span class="code">7</span></p>

<div style="text-align:center"><button type="button" id="nextButton" style="display:none" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Next!</span></button></div></div>
    
    <div id="content2"><h1>Rules</h1>
<div id="intro">
    Since this is a hacking competition, there are no rules.<br/>
but the fun is missing if there is no rule to break...<br/>
so we have a set of rules for you.
<ol>
	<li>Use of internet or mobile phones isn't allowed.</li>
	<li>Trying to fork bomb or hang the server or any other unethical activity will lead to eliminations..</li>
	<li>Team with highest score in the end will win the game.</li>
	<li>Teams of max '2' allowed.</li>
	<br/><br/>
	</ol>
	-------------------------------------------------------------------------------------------------<br/>
	##Event conducted by Information Systems Association,BITS Pilani
	
	
</ol>
    
</div>

<p id="question"></p>
<div id="questionForm" class="code">
    
  
    
    
</div>



<div style="text-align:center"><button type="button" id="nextButton" style="display:none" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Next!</span></button></div></div>
    
    </div>
	
	    <div id="logoDiv">
		<br/><br/><br/>
       EVENT BY INFORMATION SYSTEMS ASSOCIATION
    </div>

</body></html>