<?php
    $filename = 'dir1/brad04.txt';
    $size = filesize($filename);
    $fp = fopen($filename, 'r');
    $content = fread($fp, $size);
    echo $content;

    // $fp = fopen($filename, 'r');
    // $content = fread($fp, $size);
    // echo $content;

    // while ($c = fread($fp,1)){
    //     echo $c;
    // }

    fclose($fp);
?>
<!--  -->