<?php
    session_start();

    $_SESSION["userTitle"] = $_POST["userTitle"];
    $_SESSION["userFirstName"] = $_POST["userFirstName "];
    $_SESSION["userLastName"] = $_POST["userLastName"];
    $_SESSION["userRole"] = $_POST["userRole"];
    $_SESSION["password"] = $_POST["password"];

    $userRole = $_SESSION["userRole"];
    $userFirstName = $_SESSION["userFirstName"];
    $userLastName = $_SESSION["userLastName"];
    $userTitle = $_SESSION["userTitle"];
    $password = $_SESSION["password"];   
?>
