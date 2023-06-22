<?php

require_once "../config/db.php";
session_start();

if (isset($_SESSION['username'])) {
  header('location: ../dashboard/dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
      .form {
        display: block;
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
    <h3>Silahkan Login</h3>
    <form action="" method="POST">
      <label for="username" class="form">Username:</label>
      <input name="username" type="text" class="form" required>
      <label for="password" class="form">Password:</label>
      <input name="password" type="password" class="form" required>
      <input name="login" type="submit" class="form" value="Login">
    </form>
    <?php

      if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username, level FROM akun WHERE username = '{$username}' AND password = '{$password}'";

        if ($result = mysqli_query($conn, $sql)) {
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_row($result)) {
              $_SESSION['username'] = $row[0];
              $_SESSION['level'] = $row[1];
            }
            echo "<script>
              alert('Login berhasil 🤘🏼');
              location.href='../dashboard/dashboard.php';
            </script>";
          } else {
            echo "<script>alert('Mohon maaf, login gagal, username atau password salah!');</script>";
          }
        }
        else echo "<script>alert('". mysqli_error($conn) ."')</script>";
      }

    ?>
  </body>
</html>