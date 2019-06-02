<?php
class UnholyFactory{
	private $_arr = Array();
	function absorb($ins){
		if (get_parent_class($ins) == 'Fighter')
		{
			if (array_key_exists($ins->type, $this->_arr))
				echo "(Factory already absorbed a fighter of type {$ins->type})\n";
			else
			{
				$this->_arr[$ins->type] = $ins;
				echo "(Factory absorbed a fighter of type {$ins->type})\n";
			}
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)\n";
	}
	function fabricate($rf){
		foreach ($this->_arr as $ins)
		{
			if ($ins->type == $rf)
			{
				echo "(Factory fabricates a fighter of type {$rf})\n";
				return clone $ins;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type {$rf})\n";
		return null;
	}
}
?>
