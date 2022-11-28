<?php
require 'conn.php';
$nilai_arus = mysqli_query($connect, "SELECT val_amp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_arus);
$val_amp = $data['val_amp'];
if($val_amp == "") $val_amp = 0;
echo $val_amp;
?>
