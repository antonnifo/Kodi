<?php

session_start();
if(!isset($_SESSION["national_id"])){
    header("Location: ../public/signin.php");
    exit(); 

}
?>