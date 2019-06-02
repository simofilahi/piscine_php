<?php
class Jaime{
	private $s1 = "Not even if I'm drunk !\n";
	private $s2 = "Let's do this.\n";
	private $s3 = "With pleasure, but only in a tower in Winterfell, then.\n";
	function sleepWith($ins)
	{
		if ($ins instanceof Tyrion)
			echo $this->s1;
		else if ($ins instanceof Cersei)
			echo $this->s3;
		else
			echo $this->s2;
	}
}
?>
