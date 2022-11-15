<?php
// $dbhost = 'localhost';
// $dbuser = 'smar_smartpju';
// $dbpass = 'pensJOSS123';
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

$status_lampu = "";
$nilai_tegangan = "";
$nilai_arus = "";
$nilai_LDR = "";
$latitude = "";
$longitude = "";

if (
    isset($_GET['status_lampu']) && $_GET['status_lampu'] != 0 &&
    isset($_GET['nilai_tegangan']) && $_GET['nilai_tegangan'] != 0 &&
    isset($_GET['nilai_arus']) && $_GET['nilai_arus'] != 0 &&
    isset($_GET['nilai_LDR']) && $_GET['nilai_LDR'] != 0 &&
    isset($_GET['latitude']) && $_GET['latitude'] != 0 &&
    isset($_GET['longitude']) && $_GET['longitude'] != 0
) {
    $status_lampu = $_GET["status_lampu"];
    $nilai_tegangan = $_GET["nilai_tegangan"];
    $nilai_arus = $_GET["nilai-arus"];
    $nilai_LDR = $_GET["nilai_LDR"];
    $latitude = $_GET["latitude"];
    $longitude = $_GET["longitude"];

    $query = "INSERT INTO tbl_sensor (val_lamp, val_volt, val_amp, val_ldr, latitude, longitude) VALUES ('$status_lampu', '$nilai_tegangan', '$nilai_arus', '$nilai_LDR', '$latitude', '$longitude')";

    $result = mysqli_query($connect, $querry);
}
?>