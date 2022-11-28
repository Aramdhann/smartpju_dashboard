<?php
require 'conn.php';

// API
$api_key_value = "tPmAT5Ab3j7F9";
$api_key = "";

$val_lamp = "";
$val_volt = "";
$val_amp = "";
$val_ldr = "";
$latitude = "";
$longitude = "";



// POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if ($api_key == $api_key_value) {
        $val_lamp = test_input($_POST["val_lamp"]);
        $val_volt = test_input($_POST["val_volt"]);
        $val_daya = test_input($_POST["val_daya"]);
        $val_temp = test_input($_POST["val_temp"]);
        $val_amp = test_input($_POST["val_amp"]);
        $val_ldr = test_input($_POST["val_ldr"]);
        $longitude = test_input($_POST["longitude"]);
        $latitude = test_input($_POST["latitude"]);

        $sql = "INSERT INTO tbl_sensor (val_lamp, val_volt, val_daya, val_temp, val_amp, val_ldr, latitude, longitude) VALUES ('" . $val_lamp . "', '" . $val_volt . "', '" . $val_daya . "', '" . $val_temp . "', '" . $val_amp . "', '" . $val_ldr . "', '" . $latitude . "', '" . $longitude . "')";

        // get upper
        $get_upper = mysqli_query($connect, "SELECT up_threshold FROM threshold ORDER BY id DESC LIMIT 1");
        $data = mysqli_fetch_array($get_upper);
        $up_threshold = $data['up_threshold'];

        // get lower
        $get_lower = mysqli_query($connect, "SELECT low_threshold FROM threshold ORDER BY id DESC LIMIT 1");
        $data = mysqli_fetch_array($get_lower);
        $low_threshold = $data['low_threshold'];

        if ($connect->query($sql) === TRUE) {
            echo "new record created successfully with upper threshold: $up_threshold and lower threshold: $low_threshold ";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        $connect->close();
    } else {
        echo "Wrong API key!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
