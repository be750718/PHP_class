<?php
date_default_timezone_set('Asia/Taipei');
?>
<table border='1' width='100%'>
     <tr>
         <th>Filename</th>
         <th>Dir/File</th>
     </tr>
<?php
$dirname=".";
$dir = opendir($dirname);

while ($file=readdir($dir)) {
    echo "<tr>";
    echo "<td>{$file}</td>";

if(is_dir("{$dirname}/{$file}")){
    echo "<td>Dir</td>";
}else if(is_file("{$dirname}/{$file}")){
    echo "<td>File</td>";
}
echo '<td>'.filesize("{$dirname}/{$file}").'bytes </td>';//檔案大小
echo '<td>'.date('Y-m-d-H:i:s',filemtime("{$dirname}/{$file}")) . '</td>'; //修改的時間
    
    echo '</tr>';
}


closedir($dir);

?></table>
