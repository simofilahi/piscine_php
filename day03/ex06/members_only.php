<?php
	if (($_SERVER['PHP_AUTH_USER'] == "zaz") && ($_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys"))
	{
?>
<html><body>
Hello Zaz<br />
<?php
		echo "<img src='data:image/png;base64," . base64_encode(file_get_contents("../img/42.png")) . "'>\n";
?>
</body></html>
<?php
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Member area"');
		header('HTTP/1.0 401 Unauthorized');
?>
<html><body>That area is accessible for members only</body></html>
<?php
	}
?>
