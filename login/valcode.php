<?php
//验证码相关内容
$num = '1234';
$imageWidth = 60;
$imageHeight = 18;
$img = imagecreate($imageWidth,$imageHeight);
imagecolorallocate($img,240,240,240);
for($i = 0;$i < strlen($num);$i++)
{
	$x = mt_rand(1,8) + $imageWidth * $i / 4;
	$y = mt_rand(1,$imageHeight / 4);
	$color = imagecolorallocate($img,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));
	imagestring($img,5,$x,$y,$num[$i],$color);
}
for($i = 0;$i < 200;$i++)
{
	$randColor = imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	imagesetpixel($img,rand()%70,rand()%20,$randColor);
}
imagepng($img);
imagedestroy($img);
?>
