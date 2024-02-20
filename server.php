<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username">

      <input type="submit" name="">
   </form>
</body>

</html>

<?php
/*
$_SERVER - serveris - yra SGB, kuriame yra antrastes, kelias ir scenarijaus vietos.
SIo masyvo irasus sukuria ziniatinklio serveris.
Rodo beveik viska, ka reikia zinoti apie dabartine tinklalapio aplinka.

$_SERVER[$key=>$value];
*/

// foreach ($_SERVER as $key => $value) {
//    echo "$key = $value <br>";

// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   echo "Hello";
}
