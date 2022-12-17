<?php
require './core2/conn.php';
mysqli_query($connect, "TRUNCATE TABLE tbl_sensor2");
mysqli_query($connect, "ALTER TABLE tbl_sensor2 AUTO_INCREMENT=1");
header("Location: index2.php");
?>
