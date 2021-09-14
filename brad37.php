<?php
// $fp = @opendir('./dir1') or die('Server Busy');//讀現在位置裡面的dir1資料夾
$fp = @opendir('.') or die('Server Busy');//讀現在資料位置
// $fp = @opendir('..') or die('Server Busy');//上一頁資料夾
//加上@ 可抑制錯誤訊息顯示在網頁 只要是已知不嚴重可加入 
//可加上 die  或是 exit 顯示文字，在呼叫沒成功的時候出現
// echo gettype($fp);
while ($dir = readdir($fp)) {//有資料被讀到就回資料 就不等於fales 迴圈持續
    echo $dir . '<br/>';
}//下方全部被簡化成上述


// $dir = readdir($fp);
// echo $dir . '<br/>';
// $dir = readdir($fp);
// echo $dir . '<br/>';
// $dir = readdir($fp);
// echo $dir . '<br/>';
// $dir = readdir($fp);
// echo $dir . '<br/>';
// $dir = readdir($fp);
// echo $dir . '<br/>';
// $dir = readdir($fp);
// echo $dir . '<br/>';
// if ($dir === false)
//     echo 'XX';
// echo $dir . '<br/>';
closedir($fp);

?>