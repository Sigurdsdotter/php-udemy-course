<?php

class Car {


    function MoveWheels() {

        echo "Wheels move";
    }



}



if(method_exists("Car", "MoveWheels")) {

    echo "The method exist!";
    } else {
    echo "nope";
}

/* method exist function är bra om man har jätte stort arbete med mycket filer.
 Istället för att söka ijäl sig så söker man efter method med en function; sparar tid.*/

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