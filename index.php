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

   $name = "Eng Masoud";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($name)) ? "anonymous" : "logged in" . "<br>";

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










    ?>
    <p>Hi! My name is <?php echo $name; ?>, and I'm learning PHP!</p>    <h1></h1>    
</body>
</html>