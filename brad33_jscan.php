<?php

$a= 10;
function changeA($newa){
    global $a;   //全域指令!!!!!
    $a =$newa;
    echo"debug:{$a}<br />";
}
echo $a;
echo'<hr/>';
changeA(12);
echo $a;
echo '<hr />';


// shuffle($poker);
// sort($plater[0]);


$b=11;
function chb(&$c){
    $c=111;
}
echo $b;
echo'<hr/>';
chb($c);
echo $b;
echo $c;

// 不太懂









// $a is 6 here


?>

// 後端常見的事
    1.資料庫 =>會員管理/登入登出;
    2.upload =>Server =>後端伺服器檔案系統管理;
    3.cookie =>前端=>記住我 =>我會跟你玩
    4.Session =>後端=>記得我
    5.Unit Test =>單元測試
    6.
<!--  -->