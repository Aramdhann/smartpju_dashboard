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

$nilai_arus = mysqli_query($connect, "SELECT val_amp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($nilai_arus);
$val_amp = $data['val_amp'];
if($val_amp == "") $val_amp = 0;
echo $val_amp;
?>
