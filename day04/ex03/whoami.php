<?php
    session_start();
    $username = $_SESSION['loggued_on_user'];
    if ($username === null || $username === "")
        echo "ERROR\n";
    else
        echo $username . "\n";
?>
