<?php


// 試用imagecopyresized 做出來


// 概念
// 1. 創建畫布
// 2. 作畫
// 3. 輸出 (Browser / File)
// 4. 清除(記憶體)


$img=imagecreatefromjpeg("img/R.jfif"); // 1. 創建畫布

$blue = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));//顏色定義
imagefttext($img,36,rand(0,60)-30,100,80,$blue,'verdana.ttf',rand(0,9),);




header('Content-type:image/jpg');
imagejpeg($img);
imagedestroy($img);// 4. 清除(記憶體)









?>