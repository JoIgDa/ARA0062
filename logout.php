<?php
    session_start();
    echo "$_SESSION[id] \n $_SESSION[email] \n $_SESSION[senha] \n $_SESSION[adm]";
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['adm']);
?>