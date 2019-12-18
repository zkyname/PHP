<?php 
$arr1 = array_merge(range('A','Z'),range(0, 9),range('a', 'z'));
shuffle($arr1);
shuffle($arr1);
$arr2 = array_rand($arr1,4);
$str = "";
foreach ($arr2 as $index)
{
	# code...
	$str .= $arr1[$index];
}
//创建画布
$width = 120;
$height = 40;
$img = imagecreatetruecolor($width, $height);
//定义颜色，绘制有背景色的矩形
$color1 = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,200), mt_rand(100,255));
imagefilledrectangle($img, 0, 0, $width, $height, $color1);
//写入字符串到图像上；
$fontfile = "E:/xampp/giveUpLife/images/SIMLI.TTF"; //字体路径必须为绝对路径
$color3 = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,200), mt_rand(100,255));
imagettftext($img,28,5,15,32,$color3,$fontfile,$str);
//绘制像素点
for ($i=1; $i <= 200 ; $i++)
{ 
	# code...
	$color2 = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,200), mt_rand(100,255));
	imagesetpixel($img, mt_rand(0,$width),mt_rand(0,$height),$color2);
}

header("Content-Type:image/png");
imagepng($img);
imagedestroy($img);
?>
