<!DOCTYPE html>
<html>
<body>

<?php
$x = 13;

if ($x < 20) {
  echo "Have a good day!";
}

echo "<br>";

$t = 23;

if ($t < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";

$t = 17;

if ($t < 10) {
  echo "Have a good morning!";
} elseif ($t < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";

$color = "red";

switch ($color) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>
