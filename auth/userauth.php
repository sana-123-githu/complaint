<?php 
    session_start();
    if(!isset($_SESSION["userauth"]) ||  $_SESSION["userauth"] !== true){
        // var_dump($_SESSION["userauth"]);
        header("Location: ./home.html");
        exit();
    }
    
?>