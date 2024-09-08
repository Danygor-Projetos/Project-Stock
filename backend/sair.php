<?php

    session_start();
    unset($_SESSION['usu']);
    unset($_SESSION['passW']);
    header('Location: ../code/login.php');

?>