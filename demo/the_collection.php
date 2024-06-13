<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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


//------------------------------------------------------
 // String function
// php.net/ref.strings


print("Hello World") . "<br>";

// Count the words:
$string = "This is some builtin PHP functions";

echo strlen($string);

echo "<br>";

// Turn to uppercase:
echo strtoupper($string);

echo "<br>";

// Turn to lowercase:
echo strtolower($string);

echo "<br>";

// Miximum 20 letters on each line:
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;

echo "<br>";


        // -----------------------------------------


// Arrays and Associative Arrays/folders

$numberList = [5, 66666, 7, "hej", "<h1>hej</h1>", 55, 67, "<p>hej</p>"];

print_r($numberList);


$names = ["firstName" => 'Amanda', 'Ebba', "lastName" => 'Copa', 'Hansson'];      // Pilen gör firstName i inledningen av arrayen till kategorinamn.

echo $names["firstName"] . $names["lastName"];

echo "<br>";

print_r($names);

echo "<br>";
echo "<br>";

// --------------------------------------------------------
// if statements
// Inside parentheses I write the condition that the function looking for is true or not. If true, then the function inside curlybracket are executed. Example: Are website visiture logged in= Show 'this' page; if not logged in= Show 'this' page. Elseif testar ett extra alternativ.
if(11 < 10){
echo "Det är mindre än det";
} elseif( 5 < 5 ) {
    echo "Ja, men det stämmer faktiskt!";
} else{
    echo "Det är den inte..";
}

echo "<br>";
echo "<br>";

// ------------------------------------------------------
// Comparison and Logical operators

echo"<h2>Comparison operators</h2>";

echo"<pre>

    equal ==
    identical ===
    compare >   <   >=  <=  <>
    not equal !=
    not identical !== 

</pre>";

echo "<br>";
echo "<br>";

echo"<h2>Logical operators</h2>";

echo"<pre>

And &&
Or  ||
Not !

</pre>";

if( 4 === "4" || 4 == 4 )    {
    
    echo "4 and four is not equal, but 4 and 4 is.";
}

echo "<br>";
echo "<br>";

if( 4 === "4" && 4 == 4 )    {
    
    echo "Both compared are equal.";
}else   {
    echo "4 and four is not equal so this is false, even if 4 and 4 is.";
}

echo "<br>";
echo "<br>";

// -------------------------------------------------------
// Switch statement
// Like if. But when we want to test one condition to many different values- Switch testar vareabelns värde 10 mot ett case i taget tills den hittar 10.

$numberTen = 10;

switch($numberTen)  {

    case 34:
        echo "It is 34, not 10";
        break;
    case 11:
        echo "It is 11, not 10";
        break;
    case 25:
        echo "It is 25, not 10";
        break;
    case 90:
        echo "It is 90, not 10";
        break;
        case 10:
            echo "It is 10!";
            break;
    case 18:
        echo "It is 34, not 10";
        break;

    default:
        echo "We could not find anything...";
    break;
}

echo "<br>";
echo "<br>";


// Simple calculator

function calculater ($operation, $num1, $num2) {
	switch($operation) {
		case 'plus':
			return $num1 + $num2;
			break;
		case 'minus':
			return $num1 - $num2;
			break;
		case 'multiply':
			return $num1 * $num2;
			break;
		
		default:
		return "invalid, try again";
	}
}

echo "The answer is" . " " . calculater('minus', 10,5);


// ----------------------------------------------------------------
// Loops: While Loop
// Repete code untill a contion is meet. Reepet while contion is true, when false it will stop. Simmilar to if.. In the code, change if to while
// Saying to Apache "As long as 4 is less then 10, read this lines to the webpage". But 4 is always less then 10 = infinity loop
// Loop bellow reads it until } and start over.


// It is a need for a counter so it stops (counter variabel name can be anything)
// This while loop starts at 0 and when comes to + 1, it add 1 before returning to beginning of this loop. Continues until reach 10.
// Good when user need to use a database with thousends of data.

/*
while( 4 < 10 ) {

echo "Hello!";

}
*/

// This is infinity! Not good. Need to use a initialicer.. the variabel that we here call counter

$counter = 0;

while( $counter < 10 ) {

echo "Hello!";
$counter++;
//$counter = $counter + 1;

}

echo "<br>";
echo "<br>";

$counterNum = 0;

while( $counterNum <= 10 ) {

echo $counterNum;
$counterNum++;

}

echo "<br>";
echo "<br>";


// --------------------------------------------------
// For Loop
// Do same thing as while loop but write it on one row. The initialicer creates inside the loop, after that test the condition.
// The condition it is test egainst dont need to be a number, it can be data on a database for example .
// Steps: First starting the loop with initialicer, then test it towards an other value, then extrament with +1.

for( $counterForL = 0; $counterForL < 10; $counterForL++ ) {
    echo $counterForL . "<br>";
}

echo "<br>";
echo "<br>";

// -------------------------------------------------
// For Each
// A Loop for Arrays. Dont need to tell it when to stop, it stops when the array is finished.
// numbers are the array and each time it do a loop the for each pick up the next value, starting with 111 and asign it the new variable number. And that variable is for the loop function, inside foreach.
// (Coulden't used while if it was a big array where you dont know the length of the array. While need a stop sign, foreach don't)
$numbers = [111, 444, 888];

foreach($numbers as $number) {
    echo $number . "<br>";
}


echo "<br>";
echo "<br>";

// -------------------------------------------------
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


function calculatingx() {

    $sum = $number1 + $number2;
    echo $sum;

}

calculatingx(2,2);

function calculating($number1, $number2) {

    $sum = $number1 + $number2;
    echo $sum;

}

calculating(2,2);


echo "<br>";
echo "<br>";
// Function 
// Return values from function. Example above only show the value but we cant do anything with it. Example bellow saves the value so we can use it in other way.
/*
function addNumbers($number1, $number2) {

    $sum = $number1 + $number2;
    
    return $sum;

}

addNumbers(23, 23);
*/
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
// --------------------------------------------
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


echo "<br>";
echo "<br>";


// --------------------------------------------
// Constans
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


echo "<br>";
echo "<br>";
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


//------------------------------------------
// FORM


if(isset($_POST['submit'])) {


    $minimum = 5; // Skapa variabel till restriktionerna av antal tecken så den blir mer dynamisk; kan användas på fler ställen.
    $maximum = 10;
    $namesInDatabase = ["Maria", "Lennox", "Casper", "Sofia"]; //Exempel hur man gör if med databas. Vanligtvis har man inte array så här i function, man har en databas. Detta är enbart övning för mer avancerad databashantering.

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    echo "Hejsan " . $name;
    echo " ditt lösenord är " . $password;

    if(strlen($name) < $minimum) {

        echo "<p class='error'>The name needs to be longer than five characters</p>"; // Bädda in meddelandet i html för att kunna styla
    }

    if(strlen($name) > $maximum) {

        echo "<p class='error'>The name cannot be longer than 10 characters</p>"; // Bädda in meddelandet i html för att kunna styla
    }

    if(!in_array($name,$namesInDatabase)) {

        echo "Sorry, you are not allowed to login";
    } else {

        echo "Welcome";
    }

    // !in_array = ! betyder not och in_array hämtar array innehåll från $namesInDatabase   (denna if fångar upp vad som skrivs in i $name, sen letar i array databas efter namet.)

    }
    

/*

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    echo "<p class='welcome'>Hejsan " . htmlspecialchars($name) . "</p>";
    echo "<p class='password'>ditt lösenord är " . htmlspecialchars($password) . "</p>";

    if (strlen($name) < 5) {
        echo "<p class='error'>The name needs to be longer than five characters</p>";
    }
}


Info som skrivs in i form är viktigt 'sanitera'! Det skickas till databas, till server etc. Om fel tecken tillåts som bildar en kod, ex JavaScript så kan personen manipulera sidan, samla info om personer etc
Bl a htmlspecialchars förhindrar attacker på sidan. Läs mer i txt document.

*/ 

?>
    

<form action="form.php" method="post">

<input type="text" placeholder="Enter name" name="name">
<input type="password" placeholder="Enter password" name="password">
<br>
<input type="submit" name="submit">

</form>


<?php 



?>



</body>
</html>