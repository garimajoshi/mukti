<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST['_register'])
        {
            //input validation and register user

        }
        else if($_POST['_login'])
        {
            //check login credentials

        }
        else 
        {
            $error="Invalid Page Requested";
        }
    }
    else
    {
        $error="Invalid Page Requested";
    }
?>
