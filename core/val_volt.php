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

$nilai_tegangan = mysqli_query($connect, "SELECT val_volt FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_tegangan);
$val_volt = $data['val_volt'];
if($val_volt == "") $val_volt = 0;
echo $val_volt;
?>
