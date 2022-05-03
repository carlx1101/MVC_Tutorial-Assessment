<?php
    declare(strict_types = 1); // setting strict mode 1 = true, 0 = false
    include "../includes/class-autoloader.inc.php";

    $selectedOperator = $_POST['operator'];
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];

    $calculation = new Calc ($selectedOperator, (int)$firstNumber, (int)$secondNumber);

    try
    {
        echo $calculation->calculator() ;
    }
    catch (TypeError $e) 
    {
        echo "Error ： " . $e->getMessage();
    }

?>