<?php

/*
LOGINIAI OPERATORIAI - sujungia salyginius sakinius
if (salyginis_sakinys1 && salyginis_sakinys2)

&& - ir - tiesa, kai ABI salygos yra tiesa;
|| - arba - tiesa, kai vienas is salygu yra tiesa;
! - ne - kai netiesa, tai - tiesa, kai tiesa - tai netiesa.

*/

// PVZ su && operatoriumi:
$temp = 45;

if ($temp >= 0 && $temp <= 28) {
   echo "The weather is good"; // kai temperatura yra 25, tai atitinka abi salygas yra daugiau uz 0 ir maziau uz 28, todel salyga vykdoma
} else {
   echo "The weather is bad"; // Kai temperatura yra 100, tai ivykdo TIK viena salyga (temperatura daugiau uz 0), del to perinama prie sio atsakymo spausdinimo
}

// PVZ su || operatoriumi:
if ($temp < 0 || $temp > 30) {
   echo "The weather is bad"; // nurodzius temperatura, pvz 45, spausdina pirmaji atsakyma, nes atitinka VIENA salyga is dvieju, tai yra, temperatura yra auksciau uz 30 
} else {
   echo "The weather is good";
}

// PVZ su ! operatoriumi:
$child = true;
$senior = true;
$ticket = null;

if (!$child || !$senior) {
   $ticket = 13;
} else {
   $ticket = 8;
}

echo "The ticket price is $$ticket";
