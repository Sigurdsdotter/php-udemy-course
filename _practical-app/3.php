<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if( 11 < 10 ){
	echo "False, this was boring!";
 } elseif( 5 < 5 ) {
	echo "Maeby this time! no...";
 } else {
	echo "I love PHP";
 }

	

// --------------------------

for($count = 0; $count < 10; $count++) {
	echo $count . "<br>";
}

// -----------------------------

$counter = 4;
switch( $counter ) {
	case 10:
		echo "Yes";
	break;
	case 11:
		echo "Yes";
	break;
	case 12:
		echo "Yes";
	break;
	case 13:
		echo "Yes";
	break;

	Default:
		echo "Sorry..";
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>