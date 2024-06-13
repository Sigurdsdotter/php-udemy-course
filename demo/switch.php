<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


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


?>



</body>
</html>