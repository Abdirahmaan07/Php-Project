<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $name = "Abdirahman";
    
    $x = 5;
    $y = 4;
    $name = "Abdirahman";
    $bool = true;
    $total = $x + $y;
    
    echo $total;
    echo "<br>";

    $names = array("Abdirahman","Ibrahim","Ali");
    echo var_dump($names);

    echo "<br>";

    echo "<br>";
    echo var_dump($name);

    echo "<br>";
    echo "<br>";

    class Car{
        public $model; 
        public $color;
        public function __construct($model,$color){
            $this->model = $model;
            $this->color = $color;
        }
        public function message(){
            return "My car is a" . $this->model . " " . $this->color. "!";
        }
    }
    $MyCar = new Car("BMW","Blue");
    echo var_dump($MyCar);

    echo "<br>";
    echo "<br>";

    $w = "Hello";
    $w = null;
    echo var_dump($w);

    echo "<br>";
    echo "<br>";

    //change data type..
    $num = 5;
    $num = (string) $num;

    echo var_dump($num);

    echo "<br>";
    echo "<br>";
    // length
    $x = "Ali";
    echo strlen("Hello $x");

    echo "<br>";
    echo "<br>";

    // PHP Casting
    $a = 5; //intiger
    $b = 5.5; //float
    $c = null; // Null
    $d = "Abdirahman"; // String
    $e = true; // Boolean

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    echo "<br>";
    var_dump($b);
    echo "<br>";
    echo "<br>";
    var_dump($c);
    echo "<br>";
    echo "<br>";
    var_dump($d);
    echo "<br>";
    echo "<br>";
    var_dump($e);
    echo "<br>";
    echo "<br>";

   // PHP Math
    // pi() Function retrun the value pi
    echo (pi(). "<br>");
    echo (min(3,10,20,-100,-200,-1) . "<br>"); // min value
    echo (max(10,-1000,20,500,100) ."<br>"); // max value
    echo (abs(-19.7)."<br>"); // retrun positive value
    echo (sqrt(25)."<br>"); // square root of number
    echo (round(-2.70)."<br>"); //function rounds a floating-point number to its nearest integer
    echo (round(2.49)."<br>"); //function rounds a floating-point number to its nearest integer
    echo (rand(10,500)."<br>"); //function generates a random number
    //PHP constant
    define("NAME", "Abdirahman");
    echo NAME . "<br>";  // To create a constant, use the define() function

    const name = "Abdirahman";
    echo name ."<br>"; //Create a constant with the const keyword

    //you can create an Array constant using the define() function
    define("Namesarray", [
        "Masoud",
        "Said", 
        "Abdullahi", 
        "Ibrahim", 
        "Abdirahman"]);
    echo Namesarray[4] . "<br>";
    //
    define("Names", "Eng Masoud");
    function MyTest(){
        echo Names;
    }
    MyTest();
    echo "<br>";
    echo "<br>";

    //PHP Magic Constants.

    //If used inside a class, the class name is returned
    class Fruits {
        public function myValue(){
          return __CLASS__;
        }
      }
      $variable = new Fruits();
      echo $variable->myValue(). "<br>";

      //The directory of the file
      echo __DIR__ . "<br>";
      //The file name including the full path
      echo __FILE__ . "<br>";
      //If inside a function, the function name is returned
      function myValue(){
        return __FUNCTION__;
      }
      echo myValue();
      echo "<br>";
      //The current line number
      echo __LINE__ . "<br>";
      //If used inside a function that belongs to a class, both class and function name is returned
      class Fruit {
        public function myValue(){
          return __METHOD__;
        }
      }
      $kiwi = new Fruits();
      echo $kiwi->myValue() . "<br>";

      //If used inside a namespace, the name of the namespace is returned
      //namespace myArea;
      function myValues(){
        return __NAMESPACE__;
      }

      echo myValue(). "<br>";
      //If used inside a trait, the trait name is returned
      trait message1 {
        public function msg1() {
          echo __TRAIT__; 
        }
      }
      
      class Welcome {
        use message1;
      }
      
      $obj = new Welcome();
      $obj->msg1();
      echo "<br>";
      //Returns the name of the specified class and the name of the namespace, if any
      //namespace myArea;
      class Fruitss{
        public function myValu(){
          return Fruitss::class;
        }
      }

      $kiwi = new Fruitss();
      echo $kiwi->myValu() . "<br>";

      //PHP Operators.

      //PHP Comparison Operators
      $x == $y; // Returns true if $x is equal to $y	
      //$x === $y //Returns true if $x is equal to $y, and they are of the same type
      //$x != $y //Returns true if $x is not equal to $y
      //$x <> $y //Returns true if $x is not equal to $y
      //$x !== $y //Returns true if $x is not equal to $y, or they are not of the same type
      //$x > $y //Returns true if $x is greater than $y
      //$x < $y //Returns true if $x is less than $y	
      //$x >= $y //Returns true if $x is greater than or equal to $y
      //$x <= $y //Returns true if $x is less than or equal to $y
      //$x <=> $y //Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y

      //PHP Increment / Decrement Operators
      $m = 1;
      ++$m;
      $m++;
      --$m;
      $m--;
      //PHP Conditional Assignment Operators

    // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($namei)) ? "anonymous" : "logged in";
   echo("<br>");

   $names = "Eng Masoud";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($names)) ? "anonymous" : "logged in" . "<br>";

   //PHP Conditional Statements

   //PHP - The if Statement

   if (10 > 5) {
    echo "Have a good day!" . "<br>";
  }

  $t = 14;

   if ($t < 20) {
    echo "Have a good day!". "<br>";
  }

  //PHP if Operators
  $t = 14;

if ($t == 14) {
  echo "Have a good day!"."<br>";
} //Comparison Operators

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true" . "<br>";
} //Logical Operators

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7" . "<br>";
}//Logical Operators

//PHP - The if...else Statement

if ( 30 < 20) {
  echo "Have a good day!" . "<br>";
} else {
  echo "Have a good night!" . "<br>";
}


//PHP - The if...elseif...else Statement

if ( 15 < 10) {
    echo "Have a good morning!". "<br>";
  } elseif ( 15 < 20) {
    echo "Have a good day!". "<br>";
  } else {
    echo "Have a good night!". "<br>";
  }
//PHP Shorthand if Statements

$a = 5;

if ($a < 10) $b = "Hello";

echo $b ."<br>"; //Short Hand If

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b . "<br>"; //Short Hand If...Else

//PHP Nested if Statement

$a = 13;

if ($a > 10) {
  echo "Above 10" ."<br>";
  if ($a > 20) {
    echo " and also above 20" ."<br>";
  } else {
    echo " but not above 20" ."<br>";
  }
}//Nested If

//PHP switch Statement
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!" ."<br>";
    break;
  case "blue":
    echo "Your favorite color is blue!" ."<br>";
    break;
  case "green":
    echo "Your favorite color is green!" ."<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!" ."<br>";
}

//PHP loops

//PHP while Loop

$i = 1;
while ($i < 6) {
  echo $i ."<br>";
  $i++;
}

//The break Statement

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i . "<br>";
  $i++;
}

//The continue Statement

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i . "<br>";
}

//The PHP do...while Loop

$i = 1;

do {
  echo $i . "<br>";
  $i++;
} while ($i < 6);

//The break Statement

$i = 1;

do {
  if ($i == 3) break;
  echo $i . "<br>";
  $i++;
} while ($i < 6);

//The continue Statement

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i . "<br>" ;
} while ($i < 6);

//The PHP for Loop

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

//The break Statement

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }

//The continue Statement

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }


//PHP foreach Loop


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color) {
  echo "$color <br>";
} // The foreach Loop on Arrays

//Keys and Values

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
} 

//The foreach Loop on Objects

class Cars {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCars = new Cars("red", "Volvo");
  
  foreach ($myCars as $x => $y) {
    echo "$x: $y <br>";
  }

  //The break Statement
  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
  }

//The continue Statement

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

//Foreach Byref

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
  echo "$x <br>";
}

echo var_dump($colors) . "<br>";

//& character in the foreach

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

echo var_dump($colors). "<br>";

//PHP Break

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }


//PHP Continue


for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }


//PHP Functions

function myMessage() {
    echo "Hello world! <br>";
  }
  
  myMessage();


//PHP Function Arguments

function familyName($fname, $year) {
    echo "$fname Masoud. Born in $year <br>";
  }
  
  familyName("Eng", "20000");


//PHP Default Argument Value


function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
setHeight(); //will use the default value of 50


//PHP Functions - Returning values


function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
echo "5 + 10 = " . sum(5, 10) . "<br>";

//Passing Arguments by Reference


function add_five(&$value) {
    $value += 5;
  }
  
$num = 2;
add_five($num);
echo $num . "<br>";

//Variable Number of Arguments


function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7,6,3);
  echo $a. "<br>"; ///


//The variadic argument must be the last argument


function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("ibrahim", "Said", "Abdulahi", "Masoud");
  echo $a . "<br>";

//PHP is a Loosely Typed Language


function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5,5);
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10



  //declare(strict_types=1); // strict requirement

  function addNumberss(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5,5);
  // since strict is enabled and "5 days" is not an integer, an error will be thrown


//PHP Arrays


$cars = array("Volvo", "BMW", "Toyota");

//Array items of four different data types

$myArr = array("Volvo", 15, ["apples", "bananas"]);


//PHP Indexed Arrays


$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

//PHP Associative Arrays


$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);


//Display the model of the car

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];


//PHP Multidimensional Arrays


$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  ); //We can store the data from the table above in a two-dimensional array, like this


  //We can also put a for loop inside another for loop to get the elements of the $cars array

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
    echo "</ul>";
  }

// PHP Global Variables - Superglobals

//GLOBALS
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction(); //Refer to the global variable $x inside a function


//

$x = 75;
  
function myfunctions() {
  global $x;
  echo $x;
}

myfunction(); //Define $x as global inside a function

    ?>
    <p>Hi! My name is <?php echo $name; ?>, and I'm learning PHP!</p>    <h1></h1>    
</body>
</html>