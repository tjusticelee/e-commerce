<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="../index.css">
  </head>
  <body>
    <header>
      <h1>Home</h1>
      <?php
        include("admin_nav_movement.php");
      ?>
      <ul>
        <li><a href="register.php">Register</li>
        <li><a href="login.php">Login</li>
        <li><a href="wishlist.php">Wishlist</li>
        <li><a href="../../index.php">Home</li>
      </ul>
    </header>
    <table>
      <tbody>
      <?php for $product in $cart ?>
      <tr>

        <th class="productbox"><?php echo $cart['product_name']; ?></th>

        <td class="productbox"><?php echo $cart['product_desc']; ?></td>

        <td class="productbox"><?php echo $cart['quantity']; ?></td>

        <td class="productbox"><?php echo $cart['product_price']; ?></td>

        <td class="productbox"><?php echo $cart['total_price']; ?></td>

     <?php endfor; ?>
     </tbody>
    </table>
    <h2>Shipping information</h2>
    <div class="information">
      <?php echo $users['streetAddress']; ?>
    </div>
    <div class="information">
      <?php echo $users['city']; ?>
    </div>
    <div class="information">
      <?php echo $users['state']; ?>
    </div>
    <div class="information">
      <?php echo $users['zipCode']; ?>
    </div>
  </body>
</html>
EOT;
?>
