<?php
// $dbhost = 'localhost';
// $dbuser = 'smar_smartpju';
// $dbpass = 'Aramdhan28';
// $dbname = 'smar_smartpju'; // sesuaikan nama database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'smart_pju'; // sesuaikan nama database

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// cek koneksi ketika gagal
if (!$connect) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
?>
