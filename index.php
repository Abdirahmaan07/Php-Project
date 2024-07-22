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

    $x = "Ali";
    echo strlen("Hello $x");
    ?>
    <p>Hi! My name is <?php echo $name; ?>, and I'm learning PHP!</p>
</body>
</html>