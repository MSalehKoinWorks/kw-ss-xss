<?php

require_once "../config/db.php";
session_start();

if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

session_destroy();
echo "<script>alert('Logout berhasil 👌🏼');</script>";
header("location: login.php");
