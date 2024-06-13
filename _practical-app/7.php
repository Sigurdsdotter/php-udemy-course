<?php include "functions.php" ?>


<?php

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/


$connection = mysqli_connect('localhost', 'root', '', 'ny-databas');

if(!$connection) {
global $connection;
	die("It failed") . mysqli_error($connection);
}

$quary = "SELECT * FROM personregister";

$result = mysqli_query($connection,$quary);

if(!$result) {
	die("Sorry, doesn't work");
}


	?>



<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  


while($records = mysqli_fetch_assoc($result)) {

//	print_r($records);

	echo $records ['username'];

}





?>



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>