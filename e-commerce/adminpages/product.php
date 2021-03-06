<?php
echo <<<"EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <header>
      <h1>Products</h1>
      <ul>
        <li><a href="expenses.html">Expenses</a></li>
        <li><a href="management.html">Management</a></li>
        <li><a href="shipments.html">Shipments</a></li>
        <li><a href="../../index.html">User Home</a></li>
      </ul>
    </header>
    <table>
      <tbody>
      <?php for $product in $inventory ?>
        <tr>
          <th class="productbox"><?php echo $inventory['product_id']; ?></th>
          <form class="inputbox" name="product_id" method="post">
            Change id
            <input type="text">
          </form>
          <th class="productbox"><?php echo $inventory['product_name']; ?></th>
          <form class="inputbox" name="product_name" method="post">
            Change name
            <input type="text">
          </form>
          <td class="productbox"><?php echo $inventory['product_desc']; ?></td>
          <form class="inputbox" name="product_desc" method="post">
            Change description
            <input type="text">
          </form>
          <td class="productbox"><?php echo $inventory['quantity']; ?></td>
          <form class="inputbox" name="quantity" method="post">
            Change quantity
            <input type="text">
          </form>
          <td class="productbox"><?php echo $inventory['product_make_cost']; ?></td>
          <form class="inputbox" name="product_make_cost" method="post">
            Change cost of creation
            <input type="text">
          </form>
          <td class="productbox"><?php echo $inventory['product_price']; ?></td>
          <form class="inputbox" name="product_price" method="post">
            Change price
            <input type="text">
          </form>
          <td class="productbox"><?php echo $inventory['in_stock']; ?></td>
          <form class="inputbox" name="in_stock" method="post">
            Change availability
            <input type="text">
          </form>
        </tr>
     <?php endfor; ?>
     </tbody>
    </table>
  </body>
</html>
EOT;
?>
