<?php
/*
ARRAY - duomenu tipas, kuriame galima saugoti daugiau nei viena reiksme bei saugoti skirtingu tipu reiksmes
Sintakse:
$arr = array();
*/

$foods = array("apple", "orange", "banana", "coconut");

echo $foods[0]; // pirmo elemento masyve gavimas

foreach ($foods as $food) { //visu masyve esanciu elementu gavimas
   // echo $food . "<br>";
}


$foods[1] = "peach"; // antro elemento, esancio masyve pakeitimas

foreach ($foods as $food) { // visi masyve esantys elementai su jau pakeistu antru elementu
   // echo $food . "<br>";
}

// array_push() - elemento pridejimas i masyvo pabaiga: pridedant reikia nurodyti i koki masyva pridedame ir kokius elementus
array_push($foods, "pineapple", "kiwi");

foreach ($foods as $food) {
   // echo $food . "<br>";
}

//  array_pop() - pasalina tik viena, paskutini elementa is masyvo pabaigos
array_pop($foods);

foreach ($foods as $food) {
   // echo $food . "<br>";
}

// array_shift() - pasalina pirma elementa is masyvo

array_shift($foods);

foreach ($foods as $food) {
   // echo $food . "<br>";
}

// array_reverse() - grazina apkeista masyva is desines i kaire. Jam butina kurti nauja kintamaji:
$foods = array_reverse($foods);

foreach ($foods as $food) {
   echo $food . "<br>";
}

// count() - suskaiciuoja elementu kieki masyve:
echo count($foods); //4
