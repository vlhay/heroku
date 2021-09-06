<?php
if($_GET['img']) {$logo = 'https://i.imgur.com/fXfH4kq.png'; //link logo phải có đuôi là .png nhé
$img = $_GET['img'];
//$image = imagecreatefromjpeg($img);
$source = getimagesize($img);
$source_mime = $source['mime'];
if($source_mime == "image/png"){
$image = imagecreatefrompng($img);
}else if($source_mime == "image/jpeg"){
$image = imagecreatefromjpeg($img);
}else if($source_mime == "image/gif"){
$image = imagecreatefromgif($img);
}
$logoImage = imagecreatefrompng("$logo");
imagealphablending($logoImage, true);
$imageWidth=imagesx($image);
$imageHeight=imagesy($image);
$logoWidth=imagesx($logoImage);
$logoHeight=imagesy($logoImage);
if($imageWidth > $logoWidth && $imageHeight > $logoHeight){
imagecopy($image, $logoImage, ($imageWidth-$logoWidth)/1, ($imageHeight-$logoHeight), 0, 0, $logoWidth, $logoHeight);
}
header("Content-type: image/png");
imagePng($image);
imageDestroy($image);
imageDestroy($imageLogo);
}else{
echo 'Chao Mung Den VuiCode.NET';
}
?>