<?php
if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputLoging($username,$pwd) !== false){
        header("Location: ../loging.php?error=emptyinput");
        exit();
    }

    loginUser($conn,$username,$pwd);
}
else{
    header('Location:../loging.php');
    exit();
}