<?php
include login.php
$link = mysqli_connect("localhost", "root", "", "Data");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
if ($row['role'] != 'admin'){
  header("Location:/e-commerce/e-commerce/index.php");
}
?>
