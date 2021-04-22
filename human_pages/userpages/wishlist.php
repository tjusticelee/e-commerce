<?php
$link = mysqli_connect("localhost", "root", "", "Data");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wishlist</title>
    <link rel="stylesheet" href="../../index.css">
  </head>
  <body>
    <header>
      <h1>Wishlist</h1>
      <ul>
        <li><a href="profile.php">Profile</li>
        <li><a href="cart.php">Cart</li>
        <li><a href="wishlist.php">Wishlist</li>
        <li><a href="../../index.php">Logout</li>
      </ul>
    </header>
    <table>
      <tbody>
      <?php for $user in $wishlist ?>
        <tr>

          <th class="productbox"><?php echo $wishlist['product_name']; ?></th>

          <td class="productbox"><?php echo $wishlist['product_price']; ?></td>

          <button type="button" name="Removal">Remove item from wishlist</button>
        </tr>
     <?php endfor; ?>
     </tbody>
    </table>
  </body>
</html>
EOT;
$remove_item = $_POST['Removal'];
$sql = "DELETE FROM wishlist WHERE product_name = %s VALUES(
  '$remove_item')";
if (mysqli_query($link, $sql)){
    if (mysqli_query($link, $deletion)) {
      echo "Valid";
    } else {
        echo "ERROR: Could not able to execute $deletion. " . mysqli_error($link);
    }
    mysqli_close();
    header("Location:/e-commerce/e-commerce/adminpages/wishlist.php");
}
?>
