<?php

    include 'includes/person.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor and Destructor</title>
</head>
<body>
    <h5>Constructor</h5>
    <p></p>
    <h5>Destructor</h5>
    <?php
    
    $person1 = new Person("Daniel",190, 50);
    echo $person1->getName(); 

    ?>
</body>
</html>