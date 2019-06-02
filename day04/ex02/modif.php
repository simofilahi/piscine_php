<?php
if ($_POST['submit'] === "OK")
{
    if ($_POST['login'] === null || $_POST['login'] === "" || $_POST['oldpw'] === null || $_POST['oldpw'] === "" || $_POST['newpw'] === null || $_POST['newpw'] === "")
        echo "ERROR\n";
    else
    {
        $username = $_POST['login'];
        $oldpw = $_POST['oldpw'];
        $newpw = $_POST['newpw'];
        $path = "../private/passwd";
        $hasholdpw = hash('whirlpool', $oldpw);
        $hashnewps = hash('whirlpool', $newpw);
        $arr = unserialize(file_get_contents($path));
        foreach((array)$arr as $key => $value)
        {
            if ($value['login'] === $username)
            {
                if ($value['passwd'] === $hasholdpw)
                {
                    $arr[$key] = null;
                    file_put_contents("../private/passwd", serialize($arr));
                    $new['passwd'] = $hashnewps;
                    $new['login'] = $username;
                    $arr[] = $new;
                    file_put_contents("../private/passwd", serialize($arr));
                    echo "OK\n";
                    return ;
                }
            }
        }
        echo "ERROR\n";
    }
}
else
    echo "ERROR\n";
?>
