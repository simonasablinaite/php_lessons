<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <!-- Pvz Nr.1 - matematines funkcijos-->
   <!-- <form action="math_functions.php" method="post">
      <label for="x">x:</label>
      <input type="text" name="x"><br>

      <label for="y">y:</label>
      <input type="text" name="y"><br>
      <label for="z">z:</label>
      <input type="text" name="z"><br>

      <input type="submit" value="total">
   </form> -->

   <!-- Pvz Nr2 - formules su apskritimu -->
   <form action="math_functions.php" method="post">
      <label for="radius">radius:</label>
      <input type="text" name="radius"><br>

      <input type="submit" value="calculate">
   </form>
</body>

</html>

<?php
// Kintamajiesiems x, y ir z reiksmes gauname is formos:
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

// Sukuriu kintamaji total ir jam priskiriu reiksme:
$total = null;

// 1. abs() - absoliucios reiksmes funkcija: neigiamas reiksmes pavercia teigiamomis
// $total = abs($x); // (pvz: -4 -> 4)

// 2. round() - suapvalina skaicius iki sveikuju skaiciu. Iki x.4 mazina i mazaja puse, o x.5 ir daugiau i didziaja
// $total = round($x); // pvz 3.4 -> 3, 4.5 -> 5

// 3. floor() - visus skaicius po kablelio suapvalina iki sveikojo skaiciaus i mazaja puse
// $total = floor($x); // 6.99 -> 6, 3.5 -> 3

// 4. ceil() - visus skaicius po kablelio suapvalina i didziaja puse
// $total = ceil($x); // 3.1 -> 4. 5.03 -> 6

// 5. sqet() - apskaiciuoja skaiciaus kvadratine sakni:
// $total = sqrt($x); // pvz: 100 -> 10, 144 -> 12

// 6. pow() - power funkcija - skaiciu x daugina tiek kartu, kiek nurodyta y
// $total = pow($x, $y); // pvz pow(2, 3) -> 2*2*2=8

// 7. max() - grazina didziausia reiksme:
// $total = max($x, $y, $z); // pvz: 7, 13, 4 -> 13

// 7. min() - grazina maziausia reiksme:
// $total = min($x, $y, $z); // pvz: 7, 13, 4 -> 4

// 8. pi() - funkcija grazina pi reiksme - 3.1415926535898
// $total = pi();

// 9. rand() - random funkcija sugeneruoja atsitikstini skaiciu:
// $total = rand(); // pvz: 2026675117
// Galima nurodyti kokiuose skaiciu reziuose nuo iki generuoti atsistiktini skaiciu:
// $total = rand($x, $y); // pvz: nuo 2 iki 7 -> 4 nuo 10 iki 100 -> 57

// echo $total;

// PVZ NR.2
$radius = $_POST["radius"];

$circumference = null;
$circumference = 2 * pi() * $radius; // apskritimo ilgio formule

$area = null;
$area = pi() * pow($radius, 2); // apskritimo ploto apskaiciavimo formule
$area = round($area, 2);

$volume = null;
$volume = 4 / 3 * pi() * pow($radius, 3); // apskritimo turio formule
$volume = round($volume, 2);

// Norint suapvalinti skaiciu iki 2 skaiciu po kablelio, nurodome  du parametrus: koki skaiciu apvaliname ir kiek skaiciu po kablelio paliekame:
$circumference = round($circumference, 2); // kai spindulys = 4, tai suapvalinus apskritimo ilgis bus 25,13 cm

echo "circumference = $circumference cm"; // kai spindulys = 3, tai apskritimo ilgis = 18.849555921539
echo "area = $area cm^2"; // kai spindulys = 6cm, tai apskritimo plotas = 113.1cm
echo "volume = $volume cm^3"; // kai spindulys = 5cm, tai apskritimo turis = 523.6cm
