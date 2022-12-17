<?php
session_start();
require './core2/conn.php';

if (isset($_POST['login'])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM akun WHERE user='$user' and pass='$pass'";
    $result = mysqli_query($connect, $sql);

    //cek username
    if(mysqli_num_rows($result) > 0) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if ($row["usertype"]=="user"){
            $_SESSION["user"] = $user;
            header("location: user.php");
        }
        elseif ($row["usertype"]=="admin"){
            $_SESSION["user"] = $user;
            header("location: admin2.php");
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
    <link rel="icon" href="./assets/img/icon-pens.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <?php if (isset ($error)):?>
            <p class="text-danger fs-italic">password atau username salah!</p>
            <?php endif;?>
            <div class="input-group">
                <input type="username" placeholder="Username" name="user" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
                <button name="login" class="btn">Login</button>
            </div>
        </form>
    </div>

    <!-- script JS -->
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./assets/js/jquery-3.6.1.min.js"></script>
</body>

</html>
