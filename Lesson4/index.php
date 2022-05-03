<?php

    include 'includes/person.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stiatic Properties and Method</title>
</head>
<body>
    <?php
    
    $person1 = new Person("Daniel",190, 50);
    echo $person1->getDA(); 

    // echo Person::$drinkingAge;
    // Person::$setDrinkingAge(12);
    // echo Person::$drinkingAge;
    ?>
</body>
</html>