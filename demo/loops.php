<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

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





?>


</body>
</html>