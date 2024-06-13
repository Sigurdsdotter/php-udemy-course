
<?php include "db.php";?>

<?php

// Create function:

function createRows() {
    global $connection;
    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);

        $hashFormat = "$2y$10$";          // 10 är antalet gånger crypt kör hash. (skapar liknande ett boll lotteri som snurrar och ger olika boll nr. Denna körs 10 gånger = säkert) 
        $salt = "iusesomecrazystrings22";   // Måste vara 22 tecken.
        $hashF_and_salt = $hashFormat . $salt;  // Slår ihop Förstärker säkerheten
        $password = crypt($password, $hashF_and_salt);


        $query = "INSERT INTO users(username,password) ";   //sql command
        $query .="VALUES ('$username', '$password')";       // Punkten sätter ihop dessa två texter. Detta strukturerar koden. Kan skriva ihop, plasera VALUES efter INSERT INTO. HTML Strings behöver citat tecken

        $result = mysqli_query($connection, $query);

        if(!$result) {                                      // Checkar om värden inte kommit fram = Använd Bolean. ! indikerar false. Om värderna inte kommit fram så händer detta:
            die('Query FAILED' . mysqli_error());            // sql error åtgärd meddelande. Om false, så ska all verksamhet stöngas av. Query ska avsluyas.
        
        }  else {
           
            echo "Record Created";
        }   
    }

}


// Read all rows function:

function readRows() {
    global $connection;
    $query = "SELECT * FROM users";   //sql command. * betyder All data från databasen. users är själva databasens tabell namn
        
    $result = mysqli_query($connection, $query);

    if(!$result) {                                      // Checkar om värden inte kommit fram = Använd Bolean. ! indikerar false. Om värderna inte kommit fram så händer detta:
        die('Query FAILED' . mysqli_error());            // sql error åtgärd meddelande. Om false, så ska all verksamhet stöngas av. Query ska avsluyas.
    } 
    
    while($row = mysqli_fetch_assoc($result)) {   // Bolean.. Om det som hämtas är true; finns data, adressera data till nya variabeln row

        print_r($row);
      
    }

}


// Read All id for the form:

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";  
    $result = mysqli_query($connection, $query);
    if(!$result) {                                      
        die('Query FAILED' . mysqli_error());           
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    
        echo "<option value='$id'>$id</option>";
    }

}    


// Update row function:

function updateTable() {
global $connection; 

    if(isset($_POST['submit'])) {

        $username= $_POST['username'];
        $password = $_POST['password'];
        $id= $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result) {                                      
            die("Query FAILED" . mysqli_error($connection)); 

        }   else {

            echo "Record Updated";
        }
    }

}


// Delete function:

function deleteRows() {
    global $connection;
    if(isset($_POST['submit'])) {

        $username= $_POST['username'];
        $password = $_POST['password'];
        $id= $_POST['id'];
    
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result) {                                      
            die("Query FAILED" . mysqli_error($connection)); 

        }   else {

        echo "Record Deleted";
    }
    
    }
} 



?>