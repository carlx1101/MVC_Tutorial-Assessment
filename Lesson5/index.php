<?php
    include "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Load Class</title>
</head>
<body>
    <?php
    
    $person1 = new  Person\Person("Daniel", 50);
    echo $person1->getPerson(); 

    
    $house1 = new House("Road", 50);
    echo $house1->getHouse(); 

    ?>
</body>
</html>