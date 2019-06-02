#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		function get_key($arg, $s)
		{
			$arg = explode(":", $arg);
			if ($arg[0] == $s)
				return 1;
			return 0;
		}
		while ($argc > 1 && $argv[$argc - 1])
		{
			if (get_key($argv[$argc], $argv[1]))
			{
				$var = explode(":", $argv[$argc]);
				echo $var[1] . "\n";
				break;
			}
			$argc--;
		}
	}
?>
