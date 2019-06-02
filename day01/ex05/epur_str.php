#!/usr/bin/php
<?php
if ($argc > 1)
{
	$argv[1] = trim($argv[1], " \t\n\r\0\x0B");
	$var = explode(" ", $argv[1]);
	$co = count($var);
	$i = 0;
	while ($i < $co)
	{
		if ($var[$i] != ' ')
		{
			echo $var[$i];
			if ($var[$i + 1])
				echo " ";
		}
		$i++; 
	}
	echo "\n";
}
?>
