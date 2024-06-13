<?php

class Car {

    var $wheels = 4;    
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct() {
        
        echo $this->wheels = 10;

    }

}


$bmw = new Car();       // Methods jobbar även om jag inte call it (ej loop). Constructs utför beteende så fort de skapas. Bra om man behöver att något gör nått utan att användaren entegrerar med sidan.
$tryck = new Car();      // Ibland behövs methods köras innan man kör ett program. Om användare existerar/har konto så kan vi önska default/standard värden. Om object skapas kanske vi vill ha vissa värden by default t ex.





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