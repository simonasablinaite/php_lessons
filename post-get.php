<?php
/*
$_POST, $_GET yra specialūs kintamieji, naudojami duomenims rinkti iš HTML formos, o duomenys siunčiami į failą, esantį <form> veiksmų atribute:
   <form action="some_file.php" method="get">

GET ir POST skirtumai:
$_GET: 
- duomenys pridedami prie URL;
- NERA SAUGUS;
- ribojamas simboliu kiekis;
- galima w/ zyme su reiksmemis
- GET uzklausa gali buti talpykloje;
- geriau naudoti paieskos puslapiams

$_POST:
- duomenys supakuoti HTTP uzklausis turinyje;
- saugesnis;
- nera duomenu limito;
- negalima pazymeti;
- GET uzklausa nera talpykloje;
- geresnis naudojant formu pateikimui
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <!-- Pavyzdys Nr.1 -->
   <form action="post-get.php" method="post">
      <label for="username">Username:</label> <br>
      <input type="text" name="username"><br>

      <label for="password">Password:</label> <br>
      <input type="password" name="password"><br>

      <input type="submit" value="Log in">
   </form>

   <!-- PAvyzdys NR.2 -->
   <form action="post-get.php" method="post">
      <label for="quantity">Quantity</label> <br>
      <input type="text" name="quantity"><br>

      <input type="submit" value="Total">
   </form>
</body>

</html>

<?php
// Pavyzdys Nr.1
// Duomenis isspausdinti galima keliais budais:
// 1.
echo $_POST["username"]; //gaunamas vartotojo vardas is formos;
echo $_POST["password"]; // gaunamas slaptazodis;

// 2.
echo $_POST["username"] . "<br>"; // pridedamas eilutes luzis. Taskas (.) sujungia kintamaji su stringu;
echo $_POST["password"] . "<br>";

// 3.
echo "{$_POST["username"]} <br>"; // naudojant garbanotus skliaustus
echo "{$_POST["password"]} <br>";

// Pavyzdys Nr.2
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"]; //sukuriamas quantity kintamasis, kurio reiksme gaunama is formos
$total = null;

$total = $quantity * $price;
echo "You have ordered $quantity $item/s <br>";
echo "Your total is: $total";
