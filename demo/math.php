<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

// Math practise

echo 56 + 4;
echo "<br>";
echo 40 - 30;
echo "<br>";
echo 30*30;
echo "<br>";
echo 30/2;
echo "<br>";
echo "<br>";


echo 2 * 5 - 3;
echo "<br>";
echo (5 + 5) * 10;  // In parentheses, that numbers are prioriticed. Otherwise usually * are default.
echo "<br>";
echo 5 + 5 * 10;


echo "<br>";
echo "<br>";

// PHP Math functions

// pow gör exponentiation, den höjer talet till en viss potens. 2 * sig självt 7 gånger: 2*2=4, 2*4=8, 2*8=16, 2*16=32, 2*32=64, 2*64=128 (Går 2 tvår i första beräkningen 2*2, därfär bara 6 uträkningar. 2 har "huvudrollen")
echo pow(2,7);

echo "<br>";

// rand ger random nummer mellan 1 och 2000 varje gång man laddar om en sida. Det kan vara tomt mellan () Då är det random upp till 10 siffror.
echo rand(1,2000);

echo "<br>";

// Räknar ut kvadratroten. Ger det tal som gånger sig själv blir 100. 10 * 10 = 100
echo sqrt(100);

echo "<br>";

// Rounds a float up. 4.6 blir 5
echo ceil(4.5);

echo "<br>";

// Rounds a float down. 4.6 blir 5 och 4.4 blir 4 och 4.5 blir 4
echo floor(4.5);

echo "<br>";

// Rounds a float up or down, to closest, kom ihåg 0.5 avrundas till 1. 8.5 blir 9 / 8.4 blir 8
echo round(8.5);

echo "<br>";

// Fler math functions: https://www.php.net/manual/en/ref.math.php



?>

</body>
</html>