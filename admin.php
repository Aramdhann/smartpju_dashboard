<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

require './core/conn.php';

if(isset($_POST["submit"])) {
    $up = $_POST["up_threshold"];
    $low = $_POST["low_threshold"];

    $sql = "INSERT INTO threshold VALUES ('', '$up', '$low')";
    mysqli_query($connect, $sql);

    if(mysqli_affected_rows($connect) > 0) {
        echo "Berhasil setting nilai threshold!";
    } else {
        echo "Gagal!";
        echo mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="icon" href="./assets/img/icon-pens.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./admin.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container border rounded-3 p-3 mb-3">
        <form action="" method="POST">
            <div class="input-group">
                <input type="text" placeholder="Upper Threshold" name="up_threshold" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Lower Threshold" name="low_threshold" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">submit</button>
            </div>
        </form>
    </div>
    <div class="nilai" style="margin-top: 20px; flex-direction: row;">
        <p>Nilai Upper Threshold:
            <?php
            $upper = mysqli_query($connect, "SELECT up_threshold FROM threshold ORDER BY id DESC LIMIT 1");
            $data = mysqli_fetch_array($upper);
            $up_threshold = $data['up_threshold'];
            if($up_threshold == "") $up_threshold = 0;
            ?>
            <span style="color: white; background-color: #64a7ce; padding:8px 8px; border-radius:8px;"><?php echo $up_threshold; ?></span>
        </p>
        <p>Nilai Lower Threshold:
            <?php
            $upper = mysqli_query($connect, "SELECT low_threshold FROM threshold ORDER BY id DESC LIMIT 1");
            $data = mysqli_fetch_array($upper);
            $low_threshold = $data['low_threshold'];
            if($low_threshold == "") $low_threshold = 0;
            ?>
            <span style="color: white; background-color: #64a7ce; padding:8px 8px; border-radius:8px;"><?php echo $low_threshold; ?></span>
        </p>
    </div>
    <a class="btn btn-danger mb-3" style="border: none;" href="./delete_auto.php" onclick="return confirm('Data di database akan terhapus semua, apakah yakin?')"><i class='bx bx-x-circle'></i><span class="ms-2">Clear Database</span></a>
    <a class="btn btn-primary" style="background-color: #272643; border: none;" href="logout.php"><i class='bx bx-log-out'></i><span class="ms-2">Logout</span></a>
</body>
</html>
