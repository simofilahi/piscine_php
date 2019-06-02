<?php
function auth($login, $passwd)
{
    $path = "../private/passwd";
    $myhash = hash('whirlpool', $passwd);
    $arr = unserialize(file_get_contents($path));
    foreach ((array)$arr as $key => $value) {
        if ($value['login'] === $login)
        {
            if ($value['passwd'] === $myhash)
                return 1;
        }
    }
    return 0;
}
?>