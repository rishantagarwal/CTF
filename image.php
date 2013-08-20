<?php
//include 'functions.php';

header("Content-Type: image/jpeg");
$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A_Simple_Text_String", $text_color);
imagejpeg($im);
imagedestroy($im);

?>

