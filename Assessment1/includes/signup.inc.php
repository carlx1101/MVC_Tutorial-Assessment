<?php

if(isset($_POST['sign']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rePassword = $_POST['re-password'];
    $email = $_POST['email'];

    echo $username, $password, $rePassword, $email ;
    // instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($username, $password, $rePassword, $email);

    // Running error handlers and user sign up
    $signup->signupUser();

    // returning to front page
    header("location: ../index.php?error=none");

}
?>
