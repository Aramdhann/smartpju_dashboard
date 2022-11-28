<?php
require 'conn.php';
$nilai_daya = mysqli_query($connect, "SELECT val_daya FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_daya);
$val_daya = $data['val_daya'];
if($val_daya == "") $val_daya = 0;
echo $val_daya;
?>
