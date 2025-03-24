<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5985;
    var_dump($x);

    echo "This is the last one";

    //classes
    class Car {
        public $color;
        public $model;

        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }

        public function message(){
            return "My car is a " . $this->model . " " . $this->color;
        }
    }

    $myCar = new Car("Yellow", "Mazda");
    var_dump($myCar);
    $x = "John";
    echo "Hello $x";

    ?>
</body>
</html>
