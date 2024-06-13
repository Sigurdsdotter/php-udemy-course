<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

print_r($_GET);      //super global variabel inbyggd i php

$id = "hej";

$button = "Click Me!"
?>


<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>

</body>
</html>