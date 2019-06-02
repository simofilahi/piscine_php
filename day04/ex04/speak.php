<?php
    session_start();
    if ($_SESSION['loggued_on_user'] !== null &&  $_SESSION['loggued_on_user'] !== "")
    {
        date_default_timezone_set('UTC');
        $username = $_SESSION['loggued_on_user'];
        $msg = $_POST['text'];
        if ($msg !== "" && $msg !== null)
        {
            $path = "../private/chat";
            if (!file_exists( "../private"))
                mkdir( "../private");
            if (!file_exists( $path))
                file_put_contents( $path, null);
            $s = unserialize(file_get_contents($path));
            $tmp['login'] = $username;
            $tmp['msg'] = $msg;
            $tmp['time'] = "[" . date("H:i", time()) . "]";
            $s[] = $tmp;
            file_put_contents( $path, serialize($s));
        }
    }
?>
<html>
<head>
    <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
<form action="speak.php" method="POST">
    msg: <input type="text" name="text" style="width: 1000px" >
    <input type="submit" name="submit" value="OK">
</form>
</body>
</html>
