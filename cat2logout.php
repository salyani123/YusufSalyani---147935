<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user']);
    unset($_SESSION['password']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    session_destroy();
    header("location:cat2login.html");
?>