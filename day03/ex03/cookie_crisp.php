<?php
	if(isset($_GET))
	{
		foreach($_GET as $key => $val)
		{
			if ($key == "action")
				$action = $val;
			else if ($key == "name")
				$name = $val;
			else if ($key == "value")
			   	$value = $val;
		}
		if ($action == "set")
			setcookie($name, $value, time() + (86400 * 30));
		else if ($action == "get")
		{
			if ($_COOKIE[$name] !== null && $_COOKIE[$name] !== "")
				echo $_COOKIE[$name] . "\n";
		}
		else if ($action == "del")
			setcookie($name, null, time() - 1);
	}
?>
