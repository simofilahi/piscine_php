<?php
    session_start();
    include 'auth.php';
    if (($_GET['login'] !== null && $_GET['login'] !== "") && ($_GET['passwd'] !== null && $_GET['passwd'] !== ""))
    {
        if (auth($_GET['login'], $_GET['passwd']))
        {
            $_SESSION['loggued_on_user'] = $_GET['login'];
            echo "OK\n";
        }
        else
        {
            $_SESSION['loggued_on_user'] = "";
            echo "ERROR\n";
        }
    }
    else
        $_SESSION['loggued_on_user'] = "";
?>
