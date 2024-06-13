<?php

class Car {

    static $wheels = 4;     // Går inte call it som när det var public eller var.
    static $hood = 1;

    public static function MoveWheels()  {

        //echo "Wheels move";     // Om det var ett spel så skulle det vara methods här som gör att bilen rör sig, .. inte text genom echo. echo är bara exempel.
        Car::$wheels = 10;
    }

}


$bmw = new Car();  

// echo $bmw->wheels;           Går inte call it. Call it så här:

echo Car::$wheels;
echo "<br>";
Car::MoveWheels();
echo Car::$wheels;






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 



?>


</body>
</html>