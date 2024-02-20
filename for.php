<?php
/*
FOR ciklas - tam tikra koda kartoti tam tikra laika;
*/

// PVZ zodi "Labas" noriu kartoti 10 kartu:

for ($i = 1; $i < 11; $i++) {
   // echo "$i Labas <br>";
}

// PVZ skaicius spausdinti kas 5 skaiciu iki 100:
for ($i = 0; $i <= 100; $i += 5) {
   // echo $i . "<br>";
}

// Skaicius spausdinti kas antra nuo 20 iki 1:
for ($i = 20; $i > 1; $i -= 2) {
   // echo "$i <br>";
}

?>
<!-- Pvz Nr.2 -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="for.php" method="post">
      <label for="num-to-count">Enter a number to count to:</label>
      <input type="text" name="counter">

      <input type="submit" value="start">
   </form>
</body>

</html>

<?php
$counter = $_POST["counter"];

for ($i = 1; $i <= $counter; $i++) {
   echo $i . "<br>";
}

// Lygiai taip pat galima padaryti, kad skaiciuotu atgal nuo iki
