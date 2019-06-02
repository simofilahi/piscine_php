<?php
	function ft_is_sort($def)
	{
		$sor = $def;
		sort($sor);
		$rev = array_reverse($sor);
		if ($sor == $def || $rev == $def)
			return 1;
		return 0;
	}
?>
