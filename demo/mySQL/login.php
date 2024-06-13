
<?php 

if(isset($_POST['submit'])) {

    $username= $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');   // Skapa alltid variabel till databas kontakt. 4 parametrar. Första är server - localhost, username är root och '' är för password, loginapp är mySQL database.

    if($connection) {
        echo "works! We are connected to the database:)";
    } else {
        die("Dtabase connection faild, sorry");     // error meddelande 
    }
    
    
    
    
    
    
    
    /* 
    if($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "Nooo!";
    }
    */

   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<div class="container">

    <div class="col-sm-6">

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>

    </div>

</div>




</body>
</html>