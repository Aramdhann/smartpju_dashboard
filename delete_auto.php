<?php
require './core/conn.php';
mysqli_query($connect, "TRUNCATE TABLE tbl_sensor");
mysqli_query($connect, "ALTER TABLE tbl_sensor AUTO_INCREMENT=1");
header("Location: index.php");
?>
