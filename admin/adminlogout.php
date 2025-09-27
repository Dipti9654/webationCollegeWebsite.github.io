<?php
    session_start();
    if ($_SESSION['emailaddress'] == '' && ($_SESSION['emailaddress'] == 0)) {
        header('location:login.php');
    }
    session_destroy();
    header('location:login.php');
?>