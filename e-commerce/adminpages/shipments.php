<?php
include admin_only.php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shipments</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <header>
      <h1>Shipments</h1>
      <ul>
        <li><a href="expenses.html">Expenses</a></li>
        <li><a href="management.html">Management</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="../../index.html">User Home</a></li>
      </ul>
    </header>
    <table>
      <tbody>
      <?php for $shipment in $shipments ?>
        <tr>
          <th class="productbox"><?php echo $shipment['name']; ?></th>

          <td class="productbox"><?php echo $shipment['picture']; ?></td>

          <td class="productbox"><?php echo $shipment['price']; ?></td>

          <td class="productbox"><?php echo $shipment['user_bought']; ?></td>

          <td class="productbox"><?php echo $shipment['time_bought']; ?></td>
        </tr>
     <?php endfor; ?>
     </tbody>
    </table>
  </body>
</html>
EOT;
?>
