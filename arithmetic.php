<?php
/*
ARITMETINIAI OPERATORIAI:
+ - sudėtis;
- - atimtis;
* - daugyba;
/ - dalyba;
** - kėlimas laipsniu;
% - liekana, pvz x likutis padalinus is y;

DIDINIMO / MAZINIMO OPERATORIAI:
++ - padidina vienu vienetu;
-- - pamazina vienu vienetu;

OPERATORIU EILISKUMAS:
() - pirmiausia tai, kas skliaustuose
** - tada tai, kas keliama laipsniu
* / % - tada daugyba, dalyba ir liekana
+ - - tada sud4tis ir atimtis
*/

// Aritmetiniai operatoriai:
$x = 10;
$y = 2;
$z = null; // kintamasis, kuriam reikšmė bus suteikta ateityje

// $z = $x + $y; //12
// $z = $x - $y; //8
// $z = $x * $y; //20
// $z = $x / $y; //5
// $z = $x ** $y; //100
// $z = $x % $y; //0 reiskia, kad liekanos nera

echo $z;

// Didinimo / mazinimo operatoriai:
$counter = 0;

// ++$counter; //1
// ++$counter; //2
// $counter++; //1
// $counter++; //2

// --$counter; //-1
// --$counter; //-2

// Galima nurodyti kokiu skaiciu norima padidinti:
// $counter += 6; //6
// $counter += 6; //12

// Galima nurodyti kas kiek skaiciu sumazinti:
// $counter -= 2; //-2
// $counter -= 2; //-4

// echo $counter;

// Operatoriu eiliskumas:
$total = 1 + 2 - 3 * 4 / 5 ** 6; // 2.999232
echo $total; 
/*
1) 5 ** 6 = 15625
2) 3 * 4 = 12
3) 12 / 15625 = 0.000768
4) 1 + 2 = 3
5) 3 - 0.000768 = 2.999232
*/