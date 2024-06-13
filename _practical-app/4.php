<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


function calcul($num1,$num2) {
	return $num1 + $num2;

}

$result = calcul(2,4);
echo $result;




function calc() {
	$nums = 2 + 2;
	echo $nums . "<br>";
}

calc();



function calcu() {
	$num1 = 15;
	$num2 = 3;
	$numbs = $num1 + $num2;

	return $numbs;

}
$theSum = calcu();
echo $theSum . "<br>";




function calculate($num1, $num2) {
	$nums = $num1 + $num2;
	return $nums;
}

$result = calculate(4,66);
echo $result . "<br>";


function hola($hello) {
	echo $hello;
}

// Have called it after switch


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

echo "The answer is" . " " . calculater('plus', 10,5) . "<br>";


hola("This is so wierd");

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>