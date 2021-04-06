declare(strict_types=1);
<!DOCTYPE html>
<html>
<body>

<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();

function familyName($fname, $year) {
  echo "$fname Kohli. Born in $year <br>";
}

familyName("Virat", "1975");
familyName("Anushka", "1978");

echo "<br>";

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");

echo "<br>";

declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");

echo "<br>";

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

echo "<br>";

function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>"; 
echo "2 + 4 = " . sum(2, 4);

echo "<br>";

function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

echo "<br>";

function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

echo "<br>";

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

</body>
</html>
