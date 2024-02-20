<?php
/*
hashing - maisymas - jautriu duomenu (slaptazodzio) pavertimas raidemis, skaiciais ir/arba simboliais matematiniu procesu.
Panasu i sifravima.
Slepia pirminius duomenis nuo treciuju saliu
*/

// Hashinimas vyksta taip:
$password = "kebabai123";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

// Kitas budas - naudoti password_verify() funkcija:

if (password_verify("pizza123", $hash)) {
   echo "You are loged in";
} else {
   echo "Incorrect password"; // incorect password
}

if (password_verify("kebabai123", $hash)) {
   echo "You are loged in"; // you are loged in
} else {
   echo "Incorrect password";
}
