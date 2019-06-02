<?php
class NightsWatch{
		private $_arr = Array();
		function recruit($ins)
		{
			if ($ins instanceof IFighter)
				$_arr[] = $ins->fight();
		}
		function fight()
		{
			foreach ((array)$_arr as $value)
				echo $value . "\n";
		}
	}
?>
