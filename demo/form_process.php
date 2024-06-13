
<?php

// Denna sida är dubblet av filen form php. Ändrat i form action som skickar data till denna sida istället, istället för att ha php sanitering function på samma sida som html. I denna fil form_external skapar vi en extra php fil som heter form_process för sanitering av kod.



if(isset($_POST['submit'])) {


$minimum = 5; // Skapa variabel till restriktionerna av antal tecken så den blir mer dynamisk; kan användas på fler ställen.
$maximum = 10;
$namesInDatabase = ["Maria", "Lennox", "Casper", "Sofia"]; //Exempel hur man gör if med databas. Vanligtvis har man inte array så här i function, man har en databas. Detta är enbart övning för mer avancerad databashantering.

$name = $_POST['name'];
$password = $_POST['password'];

echo "Hejsan " . $name;
echo " ditt lösenord är " . $password;

if(strlen($name) < $minimum) {

    echo "<p class='error'>The name needs to be longer than five characters</p>"; // Bädda in meddelandet i html för att kunna styla
}

if(strlen($name) > $maximum) {

    echo "<p class='error'>The name cannot be longer than 10 characters</p>"; // Bädda in meddelandet i html för att kunna styla
}

if(!in_array($name,$namesInDatabase)) {

    echo "Sorry, you are not allowed to login";
} else {

    echo "Welcome";
}

// !in_array = ! betyder not och in_array hämtar array innehåll från $namesInDatabase   (denna if fångar upp vad som skrivs in i $name, sen letar i array databas efter namet.)

}


/*

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$password = $_POST['password'];

echo "<p class='welcome'>Hejsan " . htmlspecialchars($name) . "</p>";
echo "<p class='password'>ditt lösenord är " . htmlspecialchars($password) . "</p>";

if (strlen($name) < 5) {
    echo "<p class='error'>The name needs to be longer than five characters</p>";
}
}


Info som skrivs in i form är viktigt 'sanitera'! Det skickas till databas, till server etc. Om fel tecken tillåts som bildar en kod, ex JavaScript så kan personen manipulera sidan, samla info om personer etc
Bl a htmlspecialchars förhindrar attacker på sidan. Läs mer i txt document.

*/ 
?>