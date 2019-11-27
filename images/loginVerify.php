<?php 
	if(!isset($_SESSION))
		session_start();
	header('Content-type:image/png');	
	$text = $_SESSION['botText'];
	
	$font_size = 20;
	$img_width = 100;
	$img_height = 40;
	$font = $_SERVER['DOCUMENT_ROOT'].'/Capt/fonts/Montserrat-Light.ttf';
	$image = imagecreate($img_width, $img_height);
	imagecolorallocate($image, 255, 255, 255);
	
	$text_color = imagecolorallocate($image, 0, 0, 0);
	
	for($x=1;$x<=22;$x++){
		$x1 = rand(1,100);
		$x2 = rand(1,30);
		$y1 = rand(1,50);
		$y2 = rand(1,50);
		imageline($image,$x1,$y1,$x2,$y2,$text_color);
	}
	imagettftext($image,$font_size,1,4,35,$text_color,$font,$text);
	imagepng($image);
?>