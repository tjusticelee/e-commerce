<<?php
$link = mysqli_connect("localhost", "root", "", "Data");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT id, email, password, role  FROM Accounts WHERE email ='$email' AND password ='$password'";

if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      session_start();
      $_SESSION['Id'] = $row['id'];
      $_SESSION['role'] = $row['role'];
      session_write_close();
      if($row['role'] == 'C'){
      header("Location:/e-commerce/e-commerce/userpages/login.html");
    } else if($row['role'] == 'F'){
        header("Location:/e-commerce/e-commerce/userpages/register.html");
    } else if($row['role'] == 'G'){
      header("Location:/e-commerce/e-commerce/userpages/index.html");
    } else if($row['role'] == 'D'){
      header("Location:/e-commerce/e-commerce/adminpages/admin.html");
    }
  }
}
