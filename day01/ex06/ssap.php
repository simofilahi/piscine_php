#!/usr/bin/php
<?php
if ($argc > 1)
{
	$argv[0] = ' ';
	$var = implode(" ", $argv);
	$var = trim($var, " \t\n\0\r\x0B");
	$var = explode(" ", $var);
	sort($var, SORT_STRING);
	$co = count($var);
	$i = 0;
	while ($i < $co)
	{
		if ($var[$i] != "")
			echo $var[$i] . "\n";
		$i++;
	}
}
?>
