<?php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Expenses</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <header>
      <h1>Expenses</h1>
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
      Sort Expenses
      <input type="text">
    </form>
    <table>
      <tbody>
      <tr>
        <th class="expensebox"><?php echo $expenses['current_funds']; ?></th>

        <td class="expensebox"><?php echo $expenses['week_expenses']; ?></th>

        <td class="expensebox"><?php echo $expenses['week_profit']; ?></th>

        <td class="expensebox"><?php echo $expenses['yearly_expenses']; ?></th>

        <td class="expensebox"><?php echo $expenses['yearly_profit']; ?></th>

        <td class="expensebox"><?php echo $expenses['total_expenses']; ?></th>

        <td class="expensebox"><?php echo $expenses['total_profit']; ?></th>
      </tr>
     </tbody>
    </table>
  </body>
</html>
EOT;
?>
