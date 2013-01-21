<?php 
class viewDefault extends Controller{

	public $smarty;

	function __construct($smarty){
		$this->smarty = $smarty;
	}

	public function display(){
		$this->smarty->display('default.display.tpl');
		
	}
}
 ?>