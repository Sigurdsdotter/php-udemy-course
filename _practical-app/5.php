<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


echo sqrt(100);

echo "<br>";

echo ceil(100.4);

echo "<br>";

echo floor(100.6);

echo "<br>";

echo round(100.5);

echo "<br>";

echo rand(1, 4000);

echo "<br>";

$string = "This is some text";

echo strlen($string);

echo "<br>";

echo strtoupper($string);

echo "<br>";

echo strtolower($string);

$list = [65,354,7565,35,767];

echo "<br>";

sort($list);

echo "<br>";

print_r($list);

echo "<br>";

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

$new_array = [3545, "fgfhf", 65, $string];

$save_value = min($new_array);

echo $save_value;

echo "<br>";

// Newer_array tests if a value exists in a serten place. in_array is searcing: first variable is the value, second is where it is being search for.
$newer_array = [3545, "fgfhf", 65, $string, "djkrh"];

$found = in_array($string, $newer_array);

if($found) {		// if it's tro, we found the value $string. This statement is true and will print out first alternativ. If $string was missing from $newer_array it is false, it would print out else statement
	echo "Yes, it is found!";
} else {
 echo "So so Sorry!";
}


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>