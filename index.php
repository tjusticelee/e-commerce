<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <header>
      <h1>Home</h1>
      <?php
        include("admin_nav_movement.php");
      ?>
      <ul>
        <li><a href="e-commerce/userpages/register.php">Register</li>
        <li><a href="e-commerce/userpages/login.php">Login</li>
        <li><a href="e-commerce/userpages/cart.php">Cart</li>
        <li><a href="e-commerce/userpages/wishlist.php">Wishlist</li>
        <li><a href="index.html">Logout</li>
      </ul>
    </header>
    <form class="inputbox" name="sort" method="post">
      Sort Products
      <input type="text">
    </form>
    <table>
      <tbody>
      <?php for $product in $inventory ?>
      <tr>

        <th class="productbox"><?php echo $inventory['product_name']; ?></th>

        <td class="productbox"><?php echo $inventory['product_desc']; ?></td>

        <td class="productbox"><?php echo $inventory['quantity']; ?></td>

        <td class="productbox"><?php echo $inventory['product_price']; ?></td>

        <td class="productbox"><?php echo $inventory['in_stock']; ?></td>

        <form class="inputbox" name="purchase" method="post">
          Add to Cart
          <input type="text">
        </form>
     <?php endfor; ?>
     </tbody>
    </table>
  </body>
</html>
EOT;
?>
