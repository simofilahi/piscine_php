<?php
	class Targaryen{
		public function resistsFire() {
			return False;
		}
		function getBurned(){
			if ($this->resistsFire() == False)
				return 'burns alive';
			else
				return 'emerges naked but unharmed';
		}
	}
?>
