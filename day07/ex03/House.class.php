<?php
	abstract class House{
		abstract public function getHouseName();
		abstract public function getHouseMotto();
		abstract public function getHouseSeat();
		public function introduce()
		{
			echo "House {$this->getHouseName()} of {$this->getHouseseat()} : \"{$this->getHouseMotto()}\"\n";
		}
	}
?>
