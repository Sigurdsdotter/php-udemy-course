<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
// if statements
// Inside parentheses I write the condition that the function looking for is true or not. If true, then the function inside curlybracket are executed. Example: Are website visiture logged in= Show 'this' page; if not logged in= Show 'this' page. Elseif testar ett extra alternativ.
if(11 < 10){
    echo "Det är mindre än det";
    } elseif( 5 < 5 ) {
        echo "Ja, men det stämmer faktiskt!";
    } else{
        echo "Det är den inte..";
    }
    
    echo "<br>";
    echo "<br>";
    
    // ------------------------------------------------------
    // Comparison and Logical operators
    
    echo"<h2>Comparison operators</h2>";
    
    echo"<pre>
    
        equal ==
        identical ===
        compare >   <   >=  <=  <>
        not equal !=
        not identical !== 
    
    </pre>";
    
    echo "<br>";
    echo "<br>";
    
    echo"<h2>Logical operators</h2>";
    
    echo"<pre>
    
    And &&
    Or  ||
    Not !
    
    </pre>";
    
    if( 4 === "4" || 4 == 4 )    {
        
        echo "4 and four is not equal, but 4 and 4 is.";
    }
    
    echo "<br>";
    echo "<br>";
    
    if( 4 === "4" && 4 == 4 )    {
        
        echo "Both compared are equal.";
    }else   {
        echo "4 and four is not equal so this is false, even if 4 and 4 is.";
    }
    
    echo "<br>";
    echo "<br>";
    



?>


</body>
</html>