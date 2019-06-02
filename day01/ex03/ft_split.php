<?php
	function ft_split($string)
	{
		$arr = trim($string, " \t\n\0\r\x0B");
		$arr = explode(" ", $arr);
		$arr = array_filter($arr, strlen);
		sort($arr, SORT_STRING);
		return $arr;
	}
?>
