<?php
    session_start();
    $_SESSION["test"]=0;
    if(isset($_SESSION["test"])){
        header("location:Usuario.php");
    }
?>