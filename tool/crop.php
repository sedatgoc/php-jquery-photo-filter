<?php
/*
        Author = Sedat Göç
        Description : Crop and Filter Image use PHP and JQuery
        Author Mail : sedatgoc34@gmail.com
        Version : 1.0

        
*/
require("config.php");



$x = $_POST["x"];
$y = $_POST["y"];

$width = $_POST["width"]; 
$height = $_POST["height"];

$sWidth = $_POST["sWidth"]; 
$sHeight = $_POST["sHeight"]; 

$img = $_POST["img"];

$imageHash = md5($img+rand(0,999999));

$d = explode('/',$img);
$d = $d[count($d)-1];

list($wv, $hv) = getimagesize($imagePath.$d);

$ratio = $wv / $sWidth;


$newH = $width * $ratio;
$newW = $height * $ratio;
$newX = $x * $ratio;
$newY = $y * $ratio;


$image = imagecreatefrompng($imagePath.$d);
$dest = imagecreatetruecolor($newW, $newH);


imagecopy($dest, $image, 0, 0, $newX, $newY ,$newW,$newH);
imagepng($dest,$imageHashPath.$imageHash.'.png');
imagedestroy($image);
$c = explode($dir,($imageHashPath.$imageHash.'.png'));
echo $c[1];
?>