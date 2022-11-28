<?php
require 'conn.php';
$nilai_tegangan = mysqli_query($connect, "SELECT val_volt FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_tegangan);
$val_volt = $data['val_volt'];
if($val_volt == "") $val_volt = 0;
echo $val_volt;
?>
