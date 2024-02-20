<?php
/*
cookies - slapukai - yra informacija apie vartotoja, saugoma naudotojo ziniatinklio narsyklei skirtoje reklamoje, narsymo nuostatos ir kiti neskelbtini duomenys
*/

// Slapuko suskurimas:
setcookie("fav_food", "kebabai", time() + 86400, "/"); // 86400 = 1 diena sekundemis. Jei norima ilgesnio laiko - padauginame is dienu skaiciaus. pvz 86400 * 3

setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_desert", "ice cream", time() - 0, "/"); // nurodzius laika -0 - cookies yra istrinamas is narsykles

// issispausdinkime kiekvieno cookie key=>value pora:
foreach ($_COOKIE as $key => $value) {
   echo "$key = $value <br>";
}

if (isset($_COOKIE["fav_food"])) {
   echo "buy some {$_COOKIE["fav_food"]} !!!";
} else {
   echo "I dont know your favorite food";
}
