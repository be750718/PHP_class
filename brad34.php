<?php

// 概念
// 1. 創建畫布
// 2. 作畫
// 3. 輸出 (Browser / File)
// 4. 清除(記憶體)

if(isset($_GET['rate'])){
    $rate= $_GET['rate'];

}else {
    $rate=0;
}
// 網頁輸入http://localhost:81/phpd01/brad34.php?rate=80 
// 後方rate可修改顏色長度


$width = 400;
$img = imagecreate(400, 24); //創建畫布

// echo gettype($img);//記憶體位置指標   =>resource 資源 解說概念
$red = imagecolorallocate($img, 255, 0, 0);  //命名與選色
imagefilledrectangle($img, 0, 0, $width, 24, $red);
$yellow = imagecolorallocate($img,255,255,0);
imagefilledrectangle($img, 0, 0, $width*$rate/100, 24, $yellow);//改用變數控制顯示條顏色
// 上兩段在作畫
header('Content-type:image/jpg');
imagejpeg($img);

imagedestroy($img); //清除  時間久了 佔有記憶體會很大 要加入


?>
<!--  -->