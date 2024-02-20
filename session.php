<?php
/*
session - sesija - yra SGB, naudojamas informacijai apie vartotoja saugoti, kuri bus naudojama keliuose puslapiuose.
Naudotojui priskiriamas sesijos ID, pvz. prisijungimo duomenys

*/

// Pvz, sukurkime home.php faila
session_start() // pirmiausia pradedame sesija, tada kuriame html dokumenta
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="session.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username"><br>

      <label for="password">Password:</label>
      <input type="password" name="password"><br>

      <input type="submit" name="login" value="Log in">
   </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {

   if (!empty($_POST["username"]) && !empty($_POST["password"])) {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      header("Location: home.php");

      echo $_SESSION["username"] . "<br>";
      echo $_SESSION["password"] . "<br>";
   } elseif (empty($_POST["username"])) {
      echo "Missing username";
   } elseif (empty($_POST["[password]"])) {
      echo "Missing password";
   } else {
      echo "Missing both fields";
   }
}
