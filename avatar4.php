<?php include("functions.php")?>

<html><head>
    <title >CTF - Ethical HAcking conTEst </title>
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
		<table><tr><td><div id="avatartxt"><h1>G33k</h1></div></td><td><div id="avatar" style="-webkit-mask-image:url('./avatar/geek.png');"></div></td></tr></table>
        </div>
    </div>

    <div id="main">
        <div id="content"><h1>The 'G33K'</h1>
<div id="intro">
    
        <p>Where is the party? GEEKS have strong IT skills and social competences!
They are quite famous for heavy beer drinking combined
with Las Vegas poker gambling. You have definitely reached a
remarkable avatar! Congratulations. But the path
is steep to become the next level hero. Are you ready to boost
your career and get CHIEF?
<h1 style="text-align:center;">Are you ready to boost
your career and get <text style="color:red;">CHIEF?</text></h1></p>
    
</div>

<p id="question" style="text-align:center"><img src="./avatar/geek.png"style="background-image:url('./Javascript Scope Quiz_files/bg.png');border-radius:5px;"/></p>
<div id="questionForm" class="code">
    
        
    
</div>
<div style="text-align:center"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Proceed!</span></button></div>
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
            
                
                <li class="information" >Introduction</li>
            
                
                <li class="current ">The Very Basics</li>
            
                
        </div>
        <div id="locked">
            
                <li>Function Scope</li>
            
                <li>Global Variables Intro</li>
            
                <li>Global Variables 1</li>
            
                <li>Global Variables 2</li>
            
                <li>The Variable Stack 1</li>
            
                <li>The Variable Stack 2</li>
            
                <li>Closures</li>
            
                <li>Final Thoughts</li>
            
        </div>
    </ol>
</div></div>
    </div>

</body></html>