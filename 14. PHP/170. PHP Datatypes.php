<!DOCTYPE html>
<html>
<body>

<?php

echo "PHP Datatypes";
echo "String";
echo "<br>";
echo "Integer";
echo "<br>";
echo "Float";
echo "<br>";
echo "Boolean";
echo "<br>";
echo "Array";
echo "<br>";
echo "Object";
echo "<br>";
echo "NULL";
echo "<br>";
echo "Resource";
echo "<br>";



$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 5985;
var_dump($x);
echo "<br>";

$x = 10.365;
var_dump($x);
echo "<br>";

$x = true;
$y = false;

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

  echo "<br>";


  $x = "Hello world!";
  $x = null;
  var_dump($x);

?>

</body>
</html>