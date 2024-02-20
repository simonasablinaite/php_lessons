<?php
$username = " John Doe   ";
$phone = "+370-6123-4567";
$name = "Joanas";
$anothe_name = "Joanas";
$username_arr = array("John", "Doe");

// 1. strtolower() - stringa konvertuoja i visas mazasias raides;
$username = strtolower($username);

// 2. strtoupper() - stringa konvertuoja i visas didziasias raides;
$username = strtoupper($username);

// 3. trim() - pasalina visus tarpus is stringo pradzios ir pabaigos
$username = trim($username);

// 4. str_pad() - uzpildo stringa nurodytais elementais tiek simboliu, kiek nurodoma. Metodui paduodami trys parametrai: stringas, kurio simboliai turi buti keiciami; kiek simboliu turi sudaryti stringas; kokiu simboliu jis turi buti uzpildomas. Jei simbolis nenurodomas - uzpildoma tarpais
$username = str_pad($username, 20, "#");

// 5. str_replace() - simbolius stringe pakeicia kitais. Reikalingi trys parametrai: koks siblois stringe keiciamas; kokiu simboliu pakeiciamas, stringas, kuris keiciamas:
$phone = str_replace("+370", "8", $phone);

// 6. strrev() - grazina stringa atbuline tvarka is desines i kaire:
$username = strrev($username);

// 7. str_shuffle() - atsitiktine tvarka sumaiso tekste esancius simbolius
$username = str_shuffle($username);

// 8. strcmp() - string compare - palygina du stringus. Jei jie vienodi - grazina 1 (true), jei ne - -1 (false)
$username = strcmp($username, "John Doe");

// 9. strlen() - string length funkcija grazina simboliu skaiciu eiluteje (stringo ilgi)
$count = strlen($name);

// 10. strpos() - sting position - grazina pirmaji ieskomo simbolio indeksa. Reikalingi 2 parametrai: stringas, kuriame ieskomas simbolio indeksas ir simbolis, kuris ieskomas
$name = strpos($name, "a");

// 11. substr() - grazi norima eilutes dali. Reikalingi 3 parametrai: stringas is kurio norime grazinti dali stringo; pradzios indeksas nuo kurio norima grazinti stringa; grazinamo stringo pabaigos indeksas:
// Kai norima grazinti paskutini zodi stringe - nurodomi 2 parametrai: stringas is kurio norime grazinti paskutini zodi ir skaicius nuo kurio iki pabaigos reikia grazinti
$woman_name = substr($anothe_name, 0, 5);

// 12. explode() - splitina eilute - padalina ja per nurodyta simboli 
$full_name = explode(" ", $username);

// 13. implde() - sujungia masyve esancius stringus i viena eilute ir grazina stringa. Nurodomi 2 parametrai: per koki eleemnta sujungiama (pvz per tarpa) ir koks masyvas sujungiamas:
$full_name = implode(" ", $username_arr);



echo $full_name . "<br>";
echo $woman_name . "<br>";
echo $name . "<br>";
echo $count . "<br>";
echo $username . "<br>";
echo $phone;
