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
    <title>Prevent XSS</title>
  </head>
  <body>
    <h2>Selamat datang di halaman testimoni produk kami</h2>
    <form action="" method="POST">
      <textarea name="testimoni" cols="100" rows="10" placeholder="Silahkan masukkan testimoni anda untuk produk kami yang telah anda konsumsi di sini..." required></textarea>
      <br>
      <input type="submit" value="Kirim Testimoni">
    </form>
    <?php

      if (isset($_POST['testimoni'])) {
        $testimoni = htmlspecialchars($_POST['testimoni'], ENT_QUOTES, 'UTF-8');
        $sql = "INSERT INTO testimoni VALUES (NULL, '$testimoni')";

        if (mysqli_query($conn, $sql)) echo "<script>alert('Terima kasih untuk testimoni yang telah anda berikan 🤘🏼');</script>";
        else echo "<script>alert('". mysqli_error($conn) ."')</script>";
      }

    ?>
  </body>
</html>