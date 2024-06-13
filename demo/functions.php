<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


// Functions
// init function kallar på det 2 andra functions

function init() {

    say_something();
    calculate();

}

function say_something() {

    echo "Jag vill ha en egen måne" . "<br>";

}

function calculate() {

    echo 123 + 321;

}

init();


echo "<br>";
echo "<br>";


// Benefitts for using parameter:
// Without:

function greetingWithoutP() {
    echo "hej";
}
 // If I want to do I simalar function with amessage to the usar, I need to write the function again.. Thats why it is sort of static, not flexibal.

echo "<br>";
// With:

function greetingWithP($message) {
    echo $message;
}

greetingWithP("God dag");

// With parameter I can keep on coding the webpage and when I need a new message and can just call greetingWithP and type in the message. I dont need to make a new function as the first one without P. 


// --- Function med ytterligare flexibilitet, använda parametrar och värde. P är det inom parentes; samma rad som functions och värdet är värdena man skriver in när man "call it".
// Using parameter inside the function that is called message. It's like writing: $message = "Hej"; Sen kallas parameter meddelande(värdena) via function greeting.
function greeting($message) {
    echo $message;
}

greeting("Hej");


echo "<br>";
echo "<br>";

function calculates($number1, $number2) {

    echo $number1 + $number2;

}

calculates(1,1);


echo "<br>";
echo "<br>";
// Variant på Calculates

function calculating($number1, $number2) {

    $sum = $number1 + $number2;
    echo $sum;

}

calculating(2,2);


echo "<br>";
echo "<br>";
// Return values from function. Example above only show the value but we cant do anything with it. Example bellow saves the value so we can use it in other way.
/*
function addNumbers($number1, $number2) {

    $sum = $number1 + $number2;
    
    return $sum;

}

addNumbers(23, 23);
*/
echo "<br>";
echo "<br>";
// Example above don't work, need echo to return value. To use the return value we need to save it in a veriable. In example below we save it in variable result

function addNumbers($number1, $number2) {

    $sum = $number1 + $number2;
    
    return $sum;

}

$result = addNumbers(23, 23);

$result = addNumbers(100, $result); // reuse the first sum of 46

echo $result;


echo "<br>";
echo "<br>";
// ----------------------------
// Global and local variable and scope. Global variable is outside the function and can be used inside and by more then one function. Local scope is inside the function and is only used there.
// x inside try to change the value of x outside, but it cant fetch it now in the example bellow:


$x = "outside";     // Global

function convert() {

    $x = "inside";  // Local

}

echo $x;    // first call


convert(); // second call without any changes..

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Must use keyword followed by the variable I want to fetch. Php keyword  = global
$xx = "outside";     // Global

function converts() {
    global $xx;
    $xx = "inside";  // Local

}

echo $xx;

echo "<br>";
echo "<br>";

converts();

echo $xx;





?>


</body>
</html>