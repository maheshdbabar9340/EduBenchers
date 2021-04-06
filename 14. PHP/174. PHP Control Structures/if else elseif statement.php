<!DOCTYPE html>
<html>
<body>

<?php
$x = 13;

if ($x < 20) {
  echo "Have a good day!";
}

echo "<br>";

$y = 33;

if ($y < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";

$z = 21;

if ($z < 10) {
  echo "Have a good morning!";
} elseif ($z < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
