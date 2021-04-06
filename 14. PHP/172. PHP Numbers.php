<!DOCTYPE html>
<html>
<body>

<?php

echo "PHP Numbers";
echo "<br>";

$x = 5985;
var_dump(is_int($x));

echo "<br>";
 
$x = 59.85;
var_dump(is_int($x));

echo "<br>"; 

$x = 10.365;
var_dump(is_float($x));

echo "<br>"; 

$x = 1.9e411;
var_dump($x);

echo "<br>"; 

$x = acos(8);
var_dump($x);
echo "<br>"; 

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

echo "<br>"; 

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";
?>  

</body>
</html>
