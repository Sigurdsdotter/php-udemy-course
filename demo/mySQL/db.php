
<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {  // Bolean. (! = false) Om inte kontakt, visa meddelande
    die("Database connection faild, sorry");
}

?>