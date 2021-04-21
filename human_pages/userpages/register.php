<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="../index.css">
</head>

<body>
  <header>
    <h1>
      Register
    </h1>
  </header>
  <div class="information">
    <form class="inputbox" name="first_name" method="post">
      First name
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="last_name" method="post">
      Last name
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="email_id" method="post">
      Email
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="password" method="post">
      Password
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="DOB" method="post">
      Date of birth
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="phone" method="post">
      Phone number
      <input type="text">
    </form>
  </div>
  <div class="information">
    <form class="inputbox" name="role" method="post">
      Role
      <input type="text">
    </form>
  </div>
  <div class="information">
    <a href="../adminpages/expenses.php" class="loginmovement">Ok</a>
    <a href="../../index.php" class="loginmovement">Cancel</a>
  </div>
</body>

</html>
EOT;
?>
