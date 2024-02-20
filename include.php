<?php
/*
include() - nukopijuoja failo turini (php/html/text) ir itraukia ji i php faila.
Musu svetaines skyriai tampa daugkartinio naudojimo.
Pakeitimus reikia atlikti tik vienoje vietoje.
*/

// Pvz: susikuriame dar 4 failus: about.php, footer.html, header.html, location.php

include("header.html"); // ikeliamas visas turinys is header failo
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>This is the HOME page</h1><br>
   <p>Stuff about your home page can go here</p>
</body>

</html>

<?php
include("footer.html");
