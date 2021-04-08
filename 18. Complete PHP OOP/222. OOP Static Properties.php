<!DOCTYPE html>
<html>
<body>

<?php
// class pi {
//   public static $value = 3.14159;
// }

// // Get static property
// echo pi::$value;


// class pi {
//   public static $value=3.14159;
//   public function staticValue() {
//     return self::$value;
//   }
// }

// // Get static property
// $pi = new pi();
// echo $pi->staticValue();




class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo x::$value;
echo "<br>";

// Get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
 
</body>
</html>
