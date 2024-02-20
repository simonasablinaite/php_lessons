<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="validate_input.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username"> <br>

      <label for="age">Age:</label>
      <input type="text" name="age"> <br>

      <label for="email">Email:</label>
      <input type="text" name="email"> <br>

      <input type="submit" name="login" value="Log in">
   </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {
   // Inputu isvalymas nuo neteisetu simboliu
   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); //isvalomas inputas nuo specialiu simboliu

   $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); // Isvalomas inputas nuo neteisingu skaiciu

   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); // isvalomas emailas nuo neretinkamu simboliu

   // Inputu validavimas:
   $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

   $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

   if (empty($age)) {
      echo "That number wasn't valid";
   } else {
      echo "You are $age years old";
   }

   if (empty($email)) {
      echo "That email wasn't valid";
   } else {
      echo "You email is $email";
   }
}
