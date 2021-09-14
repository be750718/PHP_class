<?php
// 概念
// 1. 創建畫布
// 2. 作畫
// 3. 輸出 (Browser / File)
// 4. 清除(記憶體)


$img=imagecreatefromjpeg("img/R.jfif"); // 1. 創建畫布

$blue = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));//顏色定義
imagefttext($img,36,rand(0,60)-30,100,80,$blue,'verdana.ttf',rand(0,9),);
imagefttext($img,36,rand(0,60)-30,100+28*1,80,$blue,'verdana.ttf',2,);
imagefttext($img,36,rand(0,60)-30,100+28*2,80,$blue,'verdana.ttf','3',);
imagefttext($img,36,rand(0,60)-30,100+28*3,80,$blue,'verdana.ttf','4',);



header('Content-type:image/jpg');
imagejpeg($img);
imagedestroy($img);// 4. 清除(記憶體)









?>