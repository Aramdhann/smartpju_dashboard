<?php
require 'conn.php';
$nilai_LDR = mysqli_query($connect, "SELECT val_LDR FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_LDR);
$val_ldr = $data['val_LDR'];
if($val_ldr == "") $val_ldr = 0;
echo $val_ldr;
?>
