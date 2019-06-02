<?php
    session_start();
    date_default_timezone_set('UTC');
    $path = "../private/chat";
    if ($_SESSION['loggued_on_user'] !== null &&  $_SESSION['loggued_on_user'] !== "")
    {
        if (file_exists(  $path))
        {
            $arr = unserialize(file_get_contents($path));
            if ($arr !== null && $arr !== "")
            {
                foreach ((array)$arr as $key => $value) {
                    if ($value['msg'] !== null && $value['msg'] !== "") {
                        echo $value['time'] . " " . $value['login'] . ": " . $value['msg'];
                        echo "</br>";
                    }
                }
            }
        }
    }
?>