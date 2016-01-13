<?php
/*
		Author = Sedat Göç
		Description : Crop and Filter Image use PHP and JQuery
		Author Mail : sedatgoc34@gmail.com
		Version : 1.0

		
*/

require("config.php");
$filterId = $_POST["filterId"];
$imgF = $_POST["imgF"];
$fileName = $_POST["fileName"];


$imageHash = $fileName;

$d = explode('/',$imgF);
$d = $d[count($d)-1];

$imageHashPaths = $imageHashPath;
$dirs = $dir;
if($filterId == 2){echo grayScale($d,$imageHash);}
if($filterId == 3){echo brightnessH($d,$imageHash);}
if($filterId == 4){echo brightnessL($d,$imageHash);}
if($filterId == 5){echo brightnessM($d,$imageHash);}
if($filterId == 6){echo colorBlue($d,$imageHash);}
if($filterId == 7){echo colorGreen($d,$imageHash);}
if($filterId == 8){echo colorPink($d,$imageHash);}
if($filterId == 9){echo colorRed($d,$imageHash);}
if($filterId == 10){echo colorYellow($d,$imageHash);}
if($filterId == 11){echo contrastH($d,$imageHash);}
if($filterId == 12){echo contrastL($d,$imageHash);}
if($filterId == 13){echo edgeD($d,$imageHash);}
if($filterId == 14){echo gBlur($d,$imageHash);}
if($filterId == 15){echo negative($d,$imageHash);}
if($filterId == 16){echo sBlur($d,$imageHash);}
if($filterId == 17){echo sepiaThree($d,$imageHash);}
if($filterId == 18){echo sepiaTwo($d,$imageHash);}
if($filterId == 19){echo sepia($d,$imageHash);}

function grayScale($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_GRAYSCALE);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}

function brightnessH($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_BRIGHTNESS, 100);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function brightnessM($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_BRIGHTNESS, 50);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function brightnessL($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_BRIGHTNESS, 5);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function colorBlue($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function colorRed($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function colorYellow($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function colorGreen($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function colorPink($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function contrastH($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_CONTRAST, -40);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function contrastL($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_CONTRAST, 50);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function edgeD($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_EDGEDETECT);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function gBlur($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];

}	
function sBlur($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_SELECTIVE_BLUR);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function negative($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_NEGATE);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function sepia($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_GRAYSCALE);
			imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function sepiaTwo($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_GRAYSCALE);
			imagefilter($image, IMG_FILTER_COLORIZE, 60, 60, 0);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}
function sepiaThree($imgs,$imageHashs){
			global $imageHashPaths,$dirs;
			$newImage =$imageHashPaths.$imageHashs.'.png';
			$image = imagecreatefrompng($imageHashPaths.$imgs);
			imagefilter($image, IMG_FILTER_GRAYSCALE);
			imagefilter($image, IMG_FILTER_COLORIZE, 90, 90, 0);
			imagepng($image, $newImage);
			imagedestroy($image);
			$c = explode($dirs,$newImage);
			return $c[1];
}

?>