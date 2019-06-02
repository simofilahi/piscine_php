<?php
abstract class Fighter{
		public $type;
		function __construct($s)
		{
			$this->type = $s;
		}
		abstract protected function fight($target);
	}
?>
