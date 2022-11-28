<?php
$dbhost = 'localhost';
$dbuser = 'smart';
$dbpass = 'pensJOSS123';
$dbname = 'smar_smart'; // sesuaikan nama database
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = 'smart_pju'; // sesuaikan nama database

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// cek koneksi ketika gagal
if (!$connect) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
?>
