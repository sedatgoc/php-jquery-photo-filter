<?php 

/*
		Author = Sedat Göç
		Description : Crop and Filter Image use PHP and JQuery
		Author Mail : sedatgoc34@gmail.com
		Version : 1.0

		
*/
$dir = $_SERVER['DOCUMENT_ROOT'].'photofilter/'; // photofilter folder path on your host
$imagePath = $dir.'img/'; // image path
$imageFiltersPath = $imagePath.'filters'; // filters folder
$imageHashPath =$imagePath.'img-hash/'; // images hash(cache) folder
$imageSavePath =  $imagePath.'saveImage/'; // images save folder

?>