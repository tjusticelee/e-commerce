<?php
$link = mysqli_connect("localhost", "root", "", "Data");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
$select = "SELECT * FROM Role";
if(isset($_POST['Register'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email_id'];
$password = $_POST['password'];
$DOB = $_POST['DOB'];
$Phone = $_POST['phone'];
$Role = $_POST['role'];
$sql = "INSERT INTO Accounts( firstName, lastName, email, password, DOB, phone, role) VALUES(
  '$first_name', ' $last_name', '$email', '$password', '$DOB', '$Phone','$Role')";
  if (mysqli_query($link, $sql)){
    if($Role == '1'){
      if (mysqli_query($link, $insertion)) {
        echo "Valid";
      } else {
          echo "ERROR: Could not able to execute $insertion. " . mysqli_error($link);
      }
    }
      mysqli_close();
      header("Location:/e-commerce/e-commerce/templates/login.html");
  } else {
      echo "Sorry the information you entered has an error." .mysqli_error($link);
  }
}
?>
