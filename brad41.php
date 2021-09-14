<table border='1' width='100%'>
<?php
$content = file('dir1/maskdata.csv');
// echo count($content);//讀出陣列數
foreach ($content as $i => $line) {
    // echo"{$i}=>{$line}<br />";
    $data = explode(',',$line);
    if($i == 0) {
        echo '<tr>';
        echo"<th>{$data[1]}</th>";
        echo"<th>{$data[2]}</th>";
        echo"<th>{$data[3]}</th>";
        echo"<th>{$data[4]}</th>";
        echo"<th>{$data[5]}</th>";
        echo '</tr>';
    }else{
        echo '<tr>';
        echo"<td>{$data[1]}</td>";
        echo"<td>{$data[2]}</td>";
        echo"<td>{$data[3]}</td>";
        echo"<td>{$data[4]}</td>";
        echo"<td>{$data[5]}</td>";
        echo '</tr>';

    }

}



?>
<!--  -->