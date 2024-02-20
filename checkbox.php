<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="checkbox.php" method="post">
      <input type="checkbox" name="pizza" value="pizza">Pizza <br>
      <input type="checkbox" name="hamburger" value="hamburger">hamburger <br>
      <input type="checkbox" name="hotdog" value="hotdog">hotdog <br>
      <input type="checkbox" name="taco" value="taco">taco <br>
      <input type="checkbox" name="kebabai" value="kebabai">kebabai <br>

      <input type="submit" name="submit">
   </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
   if (isset($_POST["pizza"])) {
      echo "You like pizza <br>";
   }
   if (isset($_POST["hamburger"])) {
      echo "You like hamburgers <br>";
   }
   if (isset($_POST["hotdog"])) {
      echo "You like hotdogs <br>";
   }
   if (isset($_POST["taco"])) {
      echo "You like tacos <br>";
   }
   if (isset($_POST["kebabai"])) {
      echo "You like kebabai <br>";
   }

   if (empty($_POST["pizza"])) {
      echo "You don't like pizza <br>";
   }
   if (empty($_POST["hamburger"])) {
      echo "You don't like hamburgers <br>";
   }
   if (empty($_POST["hotdog"])) {
      echo "You don't like hotdogs <br>";
   }
   if (empty($_POST["taco"])) {
      echo "You don't like tacos <br>";
   }
   if (empty($_POST["kebabai"])) {
      echo "You don't like kebabai <br>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="checkbox.php" method="post">
      <input type="checkbox" name="foods[]" value="pizza">Pizza <br>
      <input type="checkbox" name="foods[]" value="hamburger">hamburger <br>
      <input type="checkbox" name="foods[]" value="hotdog">hotdog <br>
      <input type="checkbox" name="foods[]" value="taco">taco <br>
      <input type="checkbox" name="foods[]" value="kebabai">kebabai <br>

      <input type="submit" name="submit">
   </form>
</body>

</html>
<?php

// Kitas pavyzdys:
if (isset($_POST["submit"])) {
   $foods = $_POST["foods"];
   echo $foods[0] . "<br>";

   foreach ($foods as $food) {
      echo $food . "<br>";
   }
}
