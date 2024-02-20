<?php
/*
Funkcija - tai viena karta parasytas kodas, kuri galima iskviesti daug kartu, kai tik reikia.
Sintakse:
function pavadinimas() {

}

- funkcija inicijuojame zodziu function;
- tada eina funkcijos pavadinimas apibreziantis ka ta funkcija daro;
- dedami skliausteliai, kuriuose jei reikia nurodomi funkcijos argumentai ();
- dedami garbanoti skliaustelia, juose rasomas kodas, ka ta funkcija daro {};
 
- funkcija iskvieciama nurodzius jos pavadinimas ir skliaustelius, pvz:
divide(), multiply() ir pan
*/

// PVZ:
function happy_birthday()
{
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday Happy Birthday! <br>";
   echo "Happy Birthday to you! <br>";
}

happy_birthday();

// PVZ Nr.2
function happy_birthday2($name)
{
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday dear $name! <br>";
   echo "Happy Birthday to you! <br>";
   echo "You are x years old! <br>";
}

happy_birthday2("Spongebob");
happy_birthday2("Songok");

// PVZ Nr.3
function happy_birthday3($name, $years)
{
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday to you! <br>";
   echo "Happy Birthday dear $name! <br>";
   echo "Happy Birthday to you! <br>";
   echo "You are $years years old! <br>";
}

happy_birthday3("Spongebob", 3);
happy_birthday3("Songok", 40);

// PVZ su RETURN:
function is_even($number)
{
   $result = $number % 2;
   return $result;
}

echo is_even(11); // jei grazina 1 - tai skaicius nelyginis, jei grazina 0 arba nieko - vadinasi skaicius lyginis 

// PVZ su RETURN paprastesnis variantas:
function is_even2($number)
{
   return $number % 2;
}

echo is_even2(4); // jei grazina 1 - tai skaicius nelyginis, jei grazina 0 - vadinasi true - skaicius lyginis 

// PVZ:
function hypotenuse($a, $b)
{
   $c = sqrt($a ** 2 + $b ** 2);
   return $c;
}
echo hypotenuse(3, 4); //105
