<?php include("functions.php")?>
<?php
$_SESSION['userid']="navneet1234";
$flag=encrypt(question1);
?>
<html><body>
<p id="flag" style="font-family : wingdings">
<?php

//echo '<p id="flag" style="font-family : wingdings">'flag'</p>';
echo $flag;
?></p>
</body></html>