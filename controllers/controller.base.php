<?php 
abstract class Controller {

	public $smarty;
	
	function __construct() {
		$n = func_num_args();
		if ($n == 1 && func_get_arg(0) instanceof Smarty) {
			$this->smarty = func_get_arg(0);
		}
	}

	abstract public function display();
}
 ?>