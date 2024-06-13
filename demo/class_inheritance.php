<?php

class Car {

    var $wheels = 4;             // Skapa properties/ egenskaper med var (variabel)
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    function MoveWheels() {

        $this->wheels = 10;     // När refererar till Car classen inne i classen så skriver man $this
    
    }

    function CreateDoors() {

        $this->doors = 6;

    }

}


// class Plane ska ärva egenskaper från Car


class Plane extends Car {

var $wheels = 2;            //Kan skriva över parents egenskaper och methods 

}

$jet = new Plane();

echo "SAS has " . $jet->doors . " doors" . "<br>";

//$jet->MoveWheels();
echo $jet->wheels;










/*
if(class_exists("Plane")) {

    echo "It does!";
}
*/



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