<?php
require_once "../config/db.php";
session_start();

if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silahkan login terlebih dahulu!'); location.href = '../auth/login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  </head>
  <body>
    <h2>Halaman Dashboard</h2>
    <div><b>Informasi Akun:</b></div>
    <div>Username: <?= $_SESSION['username']; ?></div>
    <div>Level Akun: <?= $_SESSION['level']; ?></div>
  </body>
</html>