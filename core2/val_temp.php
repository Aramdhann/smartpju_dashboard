<?php
require 'conn.php';
$nilai_temp = mysqli_query($connect, "SELECT val_temp FROM tbl_sensor2 ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_temp);
$val_temp = $data['val_temp'];
if($val_temp == "") $val_temp = 0;
echo $val_temp;
?>
