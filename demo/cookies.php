
<?php 

$name = "SomeName";
$value = 100;
$expiration =time() + (60*60*24*7*4);      // time function är förprogrammerad köra i sek. Inom parentes multiplerar sekunder.. viar när function avslutas. (sek,min,tim,dagar,veckor) Denna cookie går ut efter 1 månad. Kan lägga på mer tid genom addera månader eller bara skriva antalet veckor.

setcookie($name, $value, $expiration);      // denna pree built function tar 3 parametrar.

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
// Om besökaren som vid första besöket har fått en cookie, kommer tillbaka till sidan kickar denna function in 
if(isset($_COOKIE["SomeName"])) {

$someOne = $_COOKIE["SomeName"];     // spara i variabeln i en kortare namn, snabbare jobb.

echo $someOne;                      // Fungerar cookie? Testa genom echo. Värdet som inmatats i 2 parametern kommer visas på fönstret.

} else { 

    $someOne = "";      // Behöver null, annars letar den konstant/loppar det och får error

}

?>


</body>
</html>