<?php
class Tyrion{
	private $s1 = "Not even if I'm drunk !\n";
	private $s2 = "Let's do this.\n";
	function sleepWith($ins)
	{
		if ($ins instanceof Jaime || $ins instanceof Cersei)
			echo $this->s1;
		else
			echo $this->s2;
	}
}
?>
