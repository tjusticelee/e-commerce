<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="">
</head>

<body>
  <header>
    Login
  </header>
  <div class="information">
    <form class="inputbox" name="email" method="post">
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

  <a href="../adminpages/expenses.php" class="loginmovement">Ok</a>
  <a href="../../index.php" class="loginmovement">Cancel</a>
</body>

</html>
EOT;
?>
