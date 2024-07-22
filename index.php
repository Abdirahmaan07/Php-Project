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
    };
    MyTest();
    

    ?>
    <p>Hi! My name is <?php echo $name; ?>, and I'm learning PHP!</p>    <h1></h1>    
</body>
</html>