<?php
/*
Asociatyvus masyvai - tai masyvai sudaryti is key=>value poru

pvz:
countries => capital
id => username
item => price
*/

$capitals = array(
   "USA" => "Washington D.C.",
   "Japan" => "Kyoto",
   "South Korea" => "Seoul",
   "India" => "New Delhi"
);

echo $capitals["Japan"]; // pagal rakto pavadinima gaunamas value

// Visu asociativiu masyvu elementu gavimas:
foreach ($capitals as $key => $value) {
   // echo "$key $value <br>";
}

// Elemento masyve pakeitimas:
$capitals["USA"] = "Las Vegas";
foreach ($capitals as $key => $value) {
   // echo "$key $value <br>";
}

// Naujo elemento iterpimas i masyva;
$capitals["China"] = "Beijing";
foreach ($capitals as $key => $value) {
   // echo "$key $value <br>";
}

// Paskutinio elemento poros is masyvo pasalinimas;
array_pop($capitals);
foreach ($capitals as $key => $value) {
   // echo "$key $value <br>";
}

// Pirmo elemento poros pasalinimas is masyvo:
array_shift($capitals);
foreach ($capitals as $key => $value) {
   // echo "$key $value <br>";
}

// array_key() funkcija - grazina visus key is masyvo. Butina sukurti nauja kintamaji
$keys = array_keys($capitals);
foreach ($keys as $key) {
   echo "$key <br>";
}

// array_values() funkcija grazina visus masyve esanciu value:
$values = array_values($capitals);
foreach ($values as $value) {
   echo "$value <br>";
}

// array_flip() - funkcija grazina
$capitals = array_flip($capitals);

foreach ($capitals as $key => $value) {
   echo "$key = $value <br>";
}

// array_revese() - funkcija grazina apversta masyva is desines i kaire:
$capitals = array_reverse($capitals);

foreach ($capitals as $key => $value) {
   echo "$key = $value <br>";
}

// count() - suskaiciuoja kiek elementu poru yra masyve

echo count($capitals); //3
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="associative-array.php" method="post">
      <label for="enter-country">Entera a country</label>
      <input type="text" name="country">
      <input type="submit" value="submit">
   </form>
</body>

</html>

<?php

$capital = $capitals[$_POST["country"]];


echo $capital;
