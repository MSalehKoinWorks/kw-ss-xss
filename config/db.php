<?php

$srvrname = "localhost";
$database = "kw_ss_xss";
$username = "root";
$password = "root";
$srvrport = 8889;

$conn = mysqli_connect($srvrname, $username, $password, $database, $srvrport);

if (!$conn) die("Connection failed: " . mysqli_connect_error());