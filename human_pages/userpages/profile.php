<?php
$link = mysqli_connect("localhost", "root", "", "Data");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="../../index.css">
  </head>
  <body>
    <header>
      <h1>Profile</h1>
      <?php
        include("admin_nav_movement.php");
      ?>
      <ul>
        <li><a href="profile.php">Profile</li>
        <li><a href="cart.php">Cart</li>
        <li><a href="wishlist.php">Wishlist</li>
        <li><a href="../../index.php">Logout</li>
      </ul>
    </header>
    <h2>Profile Information</h2>
    <div class="information">
      <?php echo $users['firstName']; ?>
      <form class="inputbox" name="first_name" method="post">
        Change first name
        <input type="text">
      </form>
    </div>
    <div class="information">
      <?php echo $users['lastName']; ?>
      <form class="inputbox" name="last_name" method="post">
        Change last name
        <input type="text">
      </form>
    </div>
    <div class="information">
      <?php echo $users['email']; ?>
      <form class="inputbox" name="email_id" method="post">
        Change email
        <input type="text">
      </form>
    </div>
    <div class="information">
      <?php echo $users['phone']; ?>
      <form class="inputbox" method="post">
        Change phone number
        <input type="text">
      </form>
    </div>
    <div class="information">
      <?php echo $users['password']; ?>
      <form class="inputbox" name="phone" method="post">
        Change password
        <input type="text">
      </form>
    <div class="information">
      <?php echo $users['DOB']; ?>
      <form class="inputbox" name="dob" method="post">
        Change date of birth
        <input type="text">
      </form>
    </div>
    <h2>Shipping information</h2>
    <div class="information">
      <?php echo $users['streetAddress']; ?>
      <form class="inputbox" name="street_Address" method="post">
        Change address
        <input type="text">
    </div>
    <div class="information">
      <?php echo $users['city']; ?>
      <form class="inputbox" name="city" method="post">
        Change city
        <input type="text">
    </div>
    <div class="information">
      <?php echo $users['state']; ?>
      <form class="inputbox" name="state" method="post">
        Change state
        <input type="text">
    </div>
    <div class="information">
      <?php echo $users['zip_Code']; ?>
      <form class="inputbox" name="zip_Code" method="post">
        Change zip code
        <input type="text">
    </div>

    <div class="information">
      <form class="inputbox" name="delete" method="post">
        Delete account
        <input type="text">
    </div>

  </body>
</html>
EOT;
if(isset($_POST['Register'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $street_Address = $_POST['street_Address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_Code = $_POST['zip_Code'];
  $sql = "INSERT INTO expenses(first_name, last_name, email, phone, password, dob, street_Address, city, state, zip_Code) VALUES(
    '$first_name', '$last_name', '$email', '$phone', '$password', '$dob', '$street_Address', '$city', '$state', '$zip_Code')";
  if (mysqli_query($link, $sql)){
    mysqli_close();
    header("Location:/e-commerce/e-commerce/adminpages/profile.php");
    }
  }
else if(isset($_POST['deletion'])){
    $delete_account = $_POST['deletion'];
    $sql = "DELETE FROM users WHERE role = %s VALUES(
      '$delete_account')";
    if (mysqli_query($link, $sql)){
      if (mysqli_query($link, $deletion)) {
        echo "Valid";
      }
      else {
          echo "ERROR: Could not able to execute $deletion. " . mysqli_error($link);
            }
          }
      mysqli_close();
      header("Location:/e-commerce/e-commerce/adminpages/profile.php");
    }
}
?>
