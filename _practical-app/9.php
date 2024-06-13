
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	

	session_start();

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	if(isset($_GET['id'])) {
		echo $_GET['id'];
	}

	?>

	<a href="9.php?id=DettaÄrVärdet">Press</a>  <br>

	<?php 
	

	$expiering = time() + (60 * 60 * 24 * 7);

	setcookie('NameOnCookie', 12345, $expiering);

	if(isset($_COOKIE["NameOnCookie"])) {
		
		echo $_COOKIE["NameOnCookie"] . "<br>";
	} 
	


	$_SESSION['greeting'] = "Hej";

	if(isset($_SESSION['greeting'])) {
		echo $_SESSION['greeting'];

	}

	

	?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>