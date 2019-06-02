#!/usr/bin/php
<?php
	function is_not_opnum($c)
	{
		if (($c >= '0' && $c <= '9') || $c == '*' || $c == '/' || $c == '+' || $c == '-' || $c == '%' || $c == ' '  || $c == '\t')
			return 1;
		return 0;
	}
	function gestion_erorr($s)
	{
		$len = strlen($s);
		$i = 0;
		while ($i < $len)
		{
			if (!is_not_opnum($s[$i]))
				return 0;
			$i++;
		}
		return 1;
	}
	function is_num($c){
		if ($c >= '0' && $c <= '9')
			return 1;
		return 0;
	}
	function is_token($c)
	{
		if ($c == '*' || $c == '/' || $c == '+' || $c == '-' || $c == '%')
			return 1;
		return 0;
	}
	function parse($s, &$num1, &$num2, &$token)
	{
		$len = strlen($s);
		$i = 0;
		while($i < $len)
		{
			if (is_num($s[$i]))
			{
				if ($token && $num1)
					$num2 = $num2 * 10 + $s[$i];
				else
					$num1 = $num1 * 10 + $s[$i];
			}
			else if (is_token($s[$i]))
				if (!$token)
					$token = $s[$i];
			$i++;
		}
	}
	if ($argc == 2)
	{
		$argv[1] = str_replace("\t", " ", $argv[1]);
		if (!gestion_erorr($argv[1]))
			echo "Syntax Error\n";
		else
		{
			$num1 = 0;
			$num2 = 0;
			$token = 0;
			parse($argv[1], $num1, $num2, $token);
			if ($token == '+')
				$res = $num1 + $num2;
			else if ($token == '-')
				$res = $num1 - $num2;
			else if ($token == '*')
				$res = $num1 * $num2;
			else if ($token == '/')
				$res = $num1 / $num2;
			else if ($token == '%')
				$res = $num1 % $num2;
			echo $res . "\n";
		}
	}
	else
		echo "Incorrect Parameters\n";
?>
