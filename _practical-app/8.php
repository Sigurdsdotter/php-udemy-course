<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

$leia = "stars";

$salt = "iusesomecrazystrings22";
$starWars = crypt($leia, $salt);

echo $starWars . "<br>";







	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	$hej = "hello";

	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashF_and_salt = $hashFormat . $salt;
	$hejsan =crypt($hej, $hashF_and_salt);

	echo $hejsan;
	
	

	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>