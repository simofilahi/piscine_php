<?php
   if ($_POST['submit'] === "OK")
   {
       if ($_POST['login'] === null || $_POST['login'] === "" || $_POST['passwd'] === null || $_POST['passwd'] === "")
           echo "ERROR\n";
       else
       {
           $username = $_POST['login'];
           $password = $_POST['passwd'];
           $myhash = hash('whirlpool', $password);
           if (!file_exists("../private"))
               mkdir("../private");
           if (!file_exists("../private/passwd"))
               file_put_contents("../private/passwd", null);
           $s = unserialize(file_get_contents("../private/passwd"));
           foreach ((array)$s as $key => $value)
           {
               if ($value['login'] === $username)
               {
                   echo "ERROR\n";
                   return ;
               }
           }
           $tmp['login'] =  $username;
           $tmp['passwd'] =  $myhash;
           $s[] = $tmp;
           file_put_contents("../private/passwd", serialize($s));
           echo "OK\n";
       }
   }
   else
       echo "ERROR\n";
?>
