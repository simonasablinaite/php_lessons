<?php
/* 
Kintamieji yra daugkartiniai konteineriai, kuriuose gali būti tokie duomenų tipai:
- stringai;
- sveikieji skaičiai;
- dešimtainiai skaičiai;
- loginės reikšmės (boolean'ai);
- objektai;
- masyvai;
*/

/*
Kintamųjų iniciavimas padedamas 
- $;
- nurodomas pavadinimas;
- priskyrimo ženklas =;
- reikšmė;
- užbaigiama kabliataškiu ;.

*/

// String tipo kintamieji:
$name = "John"; // string duomenu tipas
$food = "kebabai";
$email = "fake@gmail.com";

echo $name . "<br>"; // isvedimas i ekrana John. Taskas cia sujungia kintamaji ir stringa <br>
echo "Hello, $name <br>";
echo "Hello, {$name} <br>";
echo "You like {$food}? <br>";
echo "Your email is $email <br>";

// Inregers (sveikųjų skaičių) duomenų tipas:
$age = 20;
$users = 3;
$quantity = 4;

echo "You are $age years old <br>";
echo "There are $users users online <br>";
echo "You would like to buy $quantity items <br>";

// Float (dešimtainių skaičių) tipo duomenys. Tai skaičiai su kableliu:
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;

echo "Your gpa is: $gpa<br>";
echo "Your $food price is $$price <br>";
echo "Your $food price is \${$price} <br>"; // kai pasikartoja kabutes ar $ zenklas, naudojamas \ slesas
echo "The sales tax rate is: {$tax_rate}%<br>";

// Boolean tipo duomenys grąžina true arba false. Jie naudojami loginiams sakiniams rašyti:
$is_employed = false; //reiškia įdarbintas
$is_online = false; //reiškia neprisijungęs
$for_sale = true; //reiškia, kad yra parduodamas

echo "Online status is: $is_employed <br>"; //1 reiškia teigiamas. Kai yra false - negaunamas joks atsakymas. Ta vieta yra tuščia: Online status is:

// Kintamųjų miksavimas:
$total = null;
echo "You have ordered $quantity x $food <br>";
$total = $quantity * $price;
echo "Your total is: $$total <br>";
