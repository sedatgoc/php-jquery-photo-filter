<?php
/*
		Author = Sedat Göç
		Description : Crop and Filter Image use PHP and JQuery
		Author Mail : sedatgoc34@gmail.com
		Version : 1.0

		
*/

require("config.php");
$cropImage = $_POST["cropImage"];
$hashImage = $_POST["hashImage"];
$fileName = $_POST["fileName"];
$split = explode("/", $hashImage); // i use split because image name like "blabla.png?1928912". i want just blabla.png
$splited = $split[count($split)-1];
$splitT = explode("?", $splited);
$image = imagecreatefrompng($imageHashPath.$splitT[0]);
imagepng($image,$imageSavePath.$fileName.'.png');
imagedestroy($image);

$splitCrop = explode("/", $cropImage);
$splitedC = $splitCrop[count($splitCrop)-1];

unlink($imageHashPath.$splitedC); // delete cropped image from img-hash folder

unlink($imageHashPath.$splitT[0]); // delete hash image from img-hash folder

$c = explode($dir,($imageSavePath.$fileName.'.png'));
echo $c[1];// return saved image to imageC div (imageC div in index.php)
?>