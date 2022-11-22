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

$status_lampu = mysqli_query($connect, "SELECT val_lamp FROM tbl_sensor ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($status_lampu);
$val_lamp = $data['val_lamp'];
if ($val_lamp == "") $val_lamp = 0;
echo $val_lamp;
?>
