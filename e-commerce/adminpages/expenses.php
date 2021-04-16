<?php
include admin_only.php
echo <<< "EOT"
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Expenses</title>
    <link rel="stylesheet" href="../../index.css">
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
        <form class="inputbox" name="add_funds" method="post">
          Add funds
          <input type="text">

        <td class="expensebox"><?php echo $expenses['daily_profit']; ?></th>
        <form class="inputbox" name="daily_profit" method="post">
          Change daily profit
          <input type="text">

        <td class="expensebox"><?php echo $expenses['daily_expenses']; ?></th>
        <form class="inputbox" name="daily_expenses" method="post">
          Change daily expenses
          <input type="text">

        <td class="expensebox"><?php echo $expenses['week_profit']; ?></th>

        <td class="expensebox"><?php echo $expenses['week_expenses']; ?></th>

        <td class="expensebox"><?php echo $expenses['yearly_profit']; ?></th>

        <td class="expensebox"><?php echo $expenses['yearly_expenses']; ?></th>

        <td class="expensebox"><?php echo $expenses['total_profit']; ?></th>

        <td class="expensebox"><?php echo $expenses['total_expenses']; ?></th>
      </tr>
     </tbody>
    </table>
  </body>
</html>
EOT;
if(isset($_POST['daily_profit']) or isset($_POST['daily_expenses'])){
$new_daily_profit = $_POST['daily_profit'];
$new_daily_expense = $_POST['daily_expenses'];
$sql = "INSERT INTO expenses( daily_profit, daily_expenses, weekly_profit, weekly_expenses, yearly_expenses, yearly_profit) VALUES(
  '$new_daily_profit' + daily_profit, '$new_daily_expense' + daily_profit, weekly_profit +'$new_daily_profit', weekly_expense + '$new_daily_expense', yearly_profit + '$new_daily_expense', yearly_expense + '$new_daily_profit')";
}
else if(isset($_POST['weekly_profit']) or isset($_POST['weekly_expenses'])){
$new_weekly_profit = $_POST['weekly_profit'];
$new_weekly_expense = $_POST['weekly_expenses'];
$sql = "INSERT INTO expenses(weekly_profit, weekly_expenses, yearly_profit, yearly_expenses) VALUES(
  '$new_weekly_profit', '$new_weekly_expense', yearly_profit - weekly_profit + '$new_weekly_profit', yearly_expenses - weekly_expenses + '$new_weekly_expense')";
}
else if(isset($_POST['yearly_profit']) or isset($_POST['yearly_expenses'])){
$new_weekly_profit = $_POST['yearly_profit'];
$new_weekly_expense = $_POST['yearly_expenses'];
$sql = "INSERT INTO expenses(yearly_expenses, yearly_profit) VALUES(
  '$new_yearly_profit', '$new_yearly_profit')";
}
if (mysqli_query($link, $sql)){
    if (mysqli_query($link, $insertion)) {
      echo "Valid";
    } else {
        echo "ERROR: Could not able to execute $insertion. " . mysqli_error($link);
    }
    mysqli_close();
    header("Location:/e-commerce/e-commerce/adminpages/expenses.php");
}

?>
