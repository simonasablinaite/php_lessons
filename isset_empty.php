<?php
/*
isset() - grazina true, jei kintamasis yra deklaruotas ir jo reiksme nera null;
empty() - grazina true, jei kintamasis nera deklaruotas, yra false, null arba tuscias stringas;
*/

// Pvz:
$username = true;
// echo isset($username); //1 true - tiesa, kintamasis yra deklaruotas ir turi reiksme "Jo"

$email = null;
// echo isset($email); // nieko negrazina, vadinasi yra false, o tai reiskia, kad kintamasis deklaruiotas, bet neturi priskirtos reiksmes

if (isset($username)) {
   // echo "This variable is set";
} else {
   // echo "This variable is NOT set";
}

// Patikriname kintamaji, kuris neegzistuoja:
if (isset($pass)) {
   // echo "This variable is set";
} else {
   // echo "This variable is NOT set";
}

// Pvz su emty funkcija:
if (empty($username)) {
   // echo "This variable is empty";
} else {
   // echo "This variable is NOT empty";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="isset_empty.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username"> <br>

      <label for="password">Password:</label>
      <input type="password" name="password"> <br>

      <input type="submit" name="login" value="Log in">
   </form>
</body>

</html>

<?php
foreach ($_POST as $key => $value) {
   // echo "$key = $value <br>";
}

// Patikriname ar mygtukas Log in yra paspaustas:
if (isset($_POST["login"])) {

   $username = $_POST["username"];
   $password = $_POST["password"];

   if (empty($username)) {
      echo "Username is missing";
   } elseif (empty($password)) {
      echo "Password is missing";
   } else {
      echo "Hello, $username";
   }

   foreach ($_POST as $key => $value) {
      echo "$key = $value";
   }
}
