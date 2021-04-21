<?php
include admin_only.php
echo <<<"EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="../index.css">
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
if(isset($_POST['product_information'])){
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_desc = $_POST['product_desc'];
$quantity = $_POST['quantity'];
$product_make_cost = $_POST['product_make_cost'];
$product_price = $_POST['product_price'];
$sql = "INSERT INTO inventory(product_id, product_name, product_desc, quantity, product_make_cost, product_price) VALUES(
  '$product_id', '$product_name','$product_desc', '$quantity', '$product_make_cost', '$product_price')";
}
if (mysqli_query($link, $sql)){
    if (mysqli_query($link, $insertion)) {
      echo "Valid";
    } else {
        echo "ERROR: Could not able to execute $insertion. " . mysqli_error($link);
    }
    mysqli_close();
    header("Location:/e-commerce/e-commerce/adminpages/product.php");
}
?>
