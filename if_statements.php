<?php
/*
if teiginys yra:
   jei kuri nors salyga yra teigiama/teisinga, tai vykdyk nurodyta kodo bloka;
   jei salyga klaidinga - to nedaryk

   Sintakse:

   if (kazkas == true) {
      echo "do it";
   } else {
      echo "do not do it";
   }
*/

// Pvz: Patikrinkime ar asmuo pilnametis:
$age = 111;

// if ($age >= 18) {
//    echo "Asmuo yra pilnametis";
// } else {
//    echo "Asmuo yra nepilnametis";
// }

// Kai amziu ($age) yra 21, tai programa isspausdina atsakyma, kad asmuo yra pilnametis, nutraukia darba ir kitu salygu nebevykfo
// Kai amzius yra 13, tai programa patikrina pirma salyga, ji neatitinka, todel tesia darba ir eina prie kitos salygos, kuri nurodo isspausdinti atsakyma "asmuo yra nepilnametis

// Galima itraukti kelias salygas panaudonjant elseif:
if ($age > 0 && $age <= 10) {
   echo "Asmuo yra mazametis";
} elseif ($age > 10 && $age < 18) {
   echo "Asmuo yra nepilnametis";
} elseif ($age <= 0) {
   echo "Toks amzius neegzistuoja";
} elseif ($age > 110) {
   echo "Toks amzius negali egzistuoti. Jis per didelis";
} else {
   echo "Asmuo yra suauges";
}

// Patikrinimas, ar asmuo suauges naudoh=jant boolean reiksmes true arba false:
$is_adult = true;

if ($is_adult) {
   echo "Asmuo yra suauges";
} else {
   echo "Asmuo nera suages";
}

// PVZ Nr.2: apskaiciuoti savaitini atlyginima uz isdirbtas valandas

$hours = 50;
$rate = 15;
$weekly_pay = null;

if ($hours <= 40) {
   $weekly_pay = $hours * $rate;
}

echo "You made $$weekly_pay this week";

// Itraukiame nedirbamas valandas bei virsvalandzius:
if ($hours <= 0) {
   $weekly_pay = 0;
} elseif ($hours <= 40) {
   $weekly_pay = $hours * $rate;
} else {
   $weekly_pay = ($rate * 40) + (($hours - 40) * $rate * 1.5);
}

echo "You made $$weekly_pay this week";
