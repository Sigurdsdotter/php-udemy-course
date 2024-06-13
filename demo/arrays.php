<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

// Arrays and Associative Arrays/folders

$numberList = [5, 66666, 7, "hej", "<h1>hej</h1>", 55, 67, "<p>hej</p>"];

print_r($numberList);


$names = ["firstName" => 'Amanda', 'Ebba', "lastName" => 'Copa', 'Hansson'];      // Pilen gör firstName i inledningen av arrayen till kategorinamn.

echo $names["firstName"] . $names["lastName"];

echo "<br>";

print_r($names);

echo "<br>";
echo "<br>";

// Array php functions
// php.net/manual/en/ref.array.php

$list = [345,5757,345,6779,379,45];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

//List the array exactly according to the list:
print_r($list);

echo "<br>";

// List/Sort the array from small to large
sort($list);

echo "<br>";


?>


</body>
</html>