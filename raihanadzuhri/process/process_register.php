<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];


mysqli_query($koneksi, "INSERT INTO admin(username,password) VALUES ('$username','$password')");
header('location: ' . BASE_URL . 'index.php');