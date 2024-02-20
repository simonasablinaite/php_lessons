<?php
/*
switch - pakeiciama kai naudojama duag elseif teiginiu. Taip kodas tampa efektyvesnis, maziau rasyti kodo
*/

// PVZ naudojant if else:
$grade = "Bananas";

if ($grade == "A") {
   echo "You did great";
} elseif ($grade == "B") {
   echo "You did good";
} elseif ($grade == "C") {
   echo "You did okay";
} elseif ($grade == "D") {
   echo "You did poorly";
} elseif ($grade == "F") {
   echo "You did failed";
} else {
   echo "$grademis not a valid grade";
}


// PVZ su switch:
switch ($grade) {
   case "A":
      echo "You did great";
      break;
   case "B":
      echo "You did good";
      break;
   case "C";
      echo "You did okay";
      break;
   case "D";
      echo "You did poorly";
      break;
   case "F";
      echo "You did failed";
      break;
   default:
      echo "$grade is not a valid grade";
}
