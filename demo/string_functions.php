<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

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
?>




</body>
</html>