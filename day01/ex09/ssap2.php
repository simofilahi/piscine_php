#!/usr/bin/php
<?php
if ($argc > 1)
{
	function my_sort($a, $b)
	{
		$cmp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'( )*+,-./[\]^_`{|}~";
		$a = strtolower($a);
		$b = strtolower($b);
		$i = 0;
		$pos1;
		$pos2;
		while($a[$i] && $b[$i])
		{
			$pos1 = strpos($cmp, $a[$i]);
			$pos2 = strpos($cmp, $b[$i]);
			if ($pos1 > $pos2)
				return 1;
			if ($pos1 < $pos2)
				return -1;
			$i++;
		}
		if ($a[$i])
			return 1;
		return 0;
	}
	unset($argv[0]);
	$argv = implode(" ", $argv);
	$argv = explode(" ", $argv);
	$co = count($argv);
	$i = 0;
	$j = 0;
	while($i < $co)
	{
		if ($argv[$i] != "")
			$arr[$j++] = $argv[$i];
		$i++;
	}
	uasort($arr, 'my_sort');
	foreach($arr as $value)
		echo $value . "\n";
}
?>
