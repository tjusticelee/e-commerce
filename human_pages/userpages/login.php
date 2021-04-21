<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="../index.css">
</head>

<body>
  <header>
    <h1>
      Login
    </h1>
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
  <div class="information">
    <a href="../adminpages/expenses.php" class="loginmovement">Ok</a>
    <a href="../../index.php" class="loginmovement">Cancel</a>
  </div>
</body>

</html>
EOT;
?>
