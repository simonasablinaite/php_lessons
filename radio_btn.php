<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="radio_btn.php" method="post">
      <input type="radio" name="credit_card" value="visa">Visa <br>
      <input type="radio" name="credit_card" value="mastercard">MAstercad<br>
      <input type="radio" name="credit_card" value="american express">American Express<br>

      <input type="submit" name="confirm" value="confirm">
   </form>
</body>

</html>

<?php
if (isset($_POST["confirm"])) {
   $credit_card = null;
   if (isset($_POST["credit_card"])) {
      $credit_card = $_POST["credit_card"];
   }
   if ($credit_card === "visa") {
      echo "You selected visa";
   } elseif ($credit_card === "mastercard") {
      echo "You selected mastercard";
   } elseif ($credit_card === "american express") {
      echo "You selected american express";
   } else {
      echo "Please, make a selection";
   }
}

// Tas pats pavyzdys su switch:
if (isset($_POST["credit_card"])) {
}
switch ($credit_card) {
   case "visa":
      echo "You selected visa";
      break;
   case "mastercard":
      echo "You selected mastercard";
      break;
   case "american express";
      echo "You selected american express";
      break;
   default:
      echo "Please, make a selection";
}
