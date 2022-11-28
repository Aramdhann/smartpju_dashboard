<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<html>
<h1>hore berhasil login user</h1>

<div class="input-group">
    <a href="logout.php" class="btn">Logout</a>
</div>

</html>