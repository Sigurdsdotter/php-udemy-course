<?php

class Car {

    var $wheels = 4;             // Skapa properties/ egenskaper med var (variabel)
    var $hood = 1;              // idag skriver man private istället för var, som sista $doors exemplet.
    var $engine = 1;
    var $doors = 4;


    function MoveWheels() {

        $this->wheels = 10;     // När refererar till Car classen inne i classen så skriver man $this
    
    }

    function CreateDoors() {

        $this->doors = 6;

    }

}


$volvo = new Car(); 
$truck = new Car();
//$volvo->wheels = 8;
echo $volvo->wheels . "<br>";        // Obs: $ för variabeln skrivs inte nu. $ tecken är verifierat i var inne i classen och behövs inte.

echo $truck->wheels = 10 . "<br>"; 

$truck->CreateDoors();
echo $truck->doors . "<br>";



class RoseBouquet {

    var $color = "pink";
    var $thorns = true;
    var $amount = 5;

    function ChangeColor() {
        $this->color = "yellow";
    }

}

$penny_lane = new RoseBouquet();
echo $penny_lane->color . "<br>";
$penny_lane->color = "red";
echo $penny_lane->color . "<br>";
echo $penny_lane->thorns;






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