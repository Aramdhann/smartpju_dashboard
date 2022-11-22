<?php
$dbhost = 'localhost';
$dbuser = 'smar_smartpju';
$dbpass = 'pensJOSS123';
$dbname = 'smar_smartpju'; // sesuaikan nama database
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = 'smart_pju'; // sesuaikan nama database

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nilai_LDR = mysqli_query($connect, "SELECT val_LDR FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_LDR);
$val_ldr = $data['val_LDR'];
if($val_ldr == "") $val_ldr = 0;
echo $val_ldr;
?>
