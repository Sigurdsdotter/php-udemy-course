<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 


/*
is possible to create a constant using the keyword "const" but it does not work the same as the define() function but it is very similar.

From PHP.net = https://www.php.net/manual/en/language.constants.syntax.php

When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.



const CONSTANT = 'Hello World';



It is possible to assign an array with this method like so.



const ANIMALS = array('dog', 'cat', 'bird');



Some examples from the docs below, so you can copy it and try it in your php file.
*/


// Constants
// Is like JavaScript Const. You cant change the value. Example comparing to a variable.

// Variable:
$numberFlexible = 100;
$numberFlexible = 5;
$numberFlexible = "Amanda";

echo $numberFlexible;

echo "<br>";
echo "<br>";

// Constant:
// name is the variable/constant and Ebba is the value. 

define("name", "Ebba");
// name = Josefin;      // Try changing the value, but ends in error. I tryed changing the constant as weel, also error

echo name;

// --------------------------
// Const

// Works as of PHP 5.3.0
 
const CONSTANT = 'Hello World';
 
echo CONSTANT;
 

echo "<br>";
echo "<br>";
// Works as of PHP 5.6.0
 
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
 
echo ANOTHER_CONST;


echo "<br>";
echo "<br>";

const ANIMALS = array('dog', 'cat', 'bird');
 
echo ANIMALS[1]; // outputs "cat"
 

echo "<br>";
echo "<br>";

define('ANIMALS_array', array(
 
    'dog',
     
    'cat',
     
    'bird'
     
    ));
     
    echo ANIMALS_array[1]; // outputs "cat"


?>





</body>
</html>