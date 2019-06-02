#!/usr/bin/php
<?php
if ($argc == 4)
{
	unset($argv[0]);
	$tab = implode(" ", $argv);
	$tab = str_replace("\t", " ", $tab);
	$tab = explode(" ",$tab);
	$tab = array_filter($tab);
	$var = array_values($tab);
	if (!is_numeric($var[0]) || !is_numeric($var[2]))
		return ;
	$res = 0;
	if ($var[1] == '*')
	{
		$res = $var[0] * $var[2];
		$num = 1;
	}
	else if ($var[1] == '/')
	{
		$res = $var[0] / $var[2];
		$num = 1;
	}
	else if ($var[1] == '+')
	{
		$res = $var[0] + $var[2];
		$num = 1;
	}
	else if ($var[1] == '-')
	{
		$res = $var[0] - $var[2];
		$num = 1;
	}
	else if ($var[1] == '%')
	{
		$res = $var[0] % $var[2];
		$num = 1;
	}
	if ($num)
		echo $res . "\n";
}
else
	echo "Incorrect Parameters\n";
?>
