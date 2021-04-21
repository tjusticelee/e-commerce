<?php
include admin_only.php
echo <<<"EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Management</title>
    <link rel="stylesheet" href="../index.css">
  </head>
  <body>
    <header>
      <h1>Home</h1>
      <ul>
        <li><a href="expenses.html">Expenses</a></li>
        <li><a href="management.html">Management</a></li>
        <li><a href="shipments.html">Shipments</a></li>
        <li><a href="../../index.html">User Home</a></li>
      </ul>
    </header>
    <table>
      <tbody>
      <?php for $user in $users ?>
        <tr>
          <h2>Basic Information</h2>
          <th class="productbox"><?php echo $users['firstName']; ?></th>

          <th class="productbox"><?php echo $users['lastName']; ?></th>

          <th class="productbox"><?php echo $users['email']; ?></th>

          <th class="productbox"><?php echo $users['phone']; ?></th>

          <th class="productbox"><?php echo $users['DOB']; ?></th>

          <th class="productbox"><?php echo $users['role']; ?></th>

          <h2>Shipping Information</h2>

          <th class="productbox"><?php echo $users['streetAddress']; ?></th>

          <th class="productbox"><?php echo $users['city']; ?></th>

          <th class="productbox"><?php echo $users['state']; ?></th>

          <th class="productbox"><?php echo $users['zipCode']; ?></th>

          <form class="inputbox" name="removal" method="post">
            Delete User
            <input type="text">
        </tr>
     <?php endfor; ?>
     </tbody>
    </table>
  </body>
</html>
EOT;
$delete_user = $_POST['removal'];
$sql = "DELETE FROM users WHERE role = %s VALUES(
  '$delete_user')";
}
if (mysqli_query($link, $sql)){
    if (mysqli_query($link, $deletion)) {
      echo "Valid";
    } else {
        echo "ERROR: Could not able to execute $deletion. " . mysqli_error($link);
    }
    mysqli_close();
    header("Location:/e-commerce/e-commerce/adminpages/management.php");
}
?>