<?php 
if($_GET["capcha"]) { $capcha = $_GET["capcha"]; } else { $capcha = ""; }
Header("Content-type: image/png");
$images = ImageCreate(170,60);
$color = ImageColorAllocate($images,0,0,0);
$photo = ImageColorAllocate($images,255,255,255);

ImageFilledRectangle ($images,50,50,169,59,$color); 
imagestring($images, 30, 50, 25, $capcha, $photo);


Imagepng($images);
ImageDestroy($images); 
?>