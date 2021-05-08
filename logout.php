<?php
    session_start();
    session_destroy();
    unset($_GET['id']);
    unset($_SESSION['user']);
    unset($_SESSION['uname']);
    unset($_SESSION['id']);
    
    unset($_SESSION['password']);
    header("Location: index.php");
?>