<?php 
class notFound404 extends Controller{

	public $smarty;

	function __construct($smarty){
		$this->smarty = $smarty;
	}

	public function display(){
		$this->smarty->display('notFound404.display.tpl');
		
	}
}
 ?>