

<?php

if(isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    echo $username, $password; 
    // instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($username, $password);

    // Running error handlers and user sign up
    $login->loginUser();

    // returning to front page
    header("location: ../index.php?error=loginsuccess");

}
?>
