<?php

class Car {

    public $wheels = 4;         // Free data - Publick kan användas över allt 
    protected $hood = 1;       // Semi security data - Protected kan bara användas inom classen eller sub classes som förlänger classen; child class som t ex classen Semi.
    private $engine = 1;      // High security data - Private används bara inne i classen.
    var $doors = 4;

    function showProperty() {

        echo "Hood:" . $this->hood;
        echo "<br>";
        echo "Engine:" . $this->engine;
       
    }

}


$bmw = new Car();  

echo $bmw->wheels . "<br>";
echo $bmw->showProperty();
echo "<br>";



class Semi extends Car {
    function showProperty() {

        echo "Engine:" . $this->engine;
       
    }
}

$semi = new Semi();
echo $semi->showProperty();









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