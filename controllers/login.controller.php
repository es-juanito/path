<?php 
class login extends Controller{

	public $smarty;

	function __construct($smarty){
		$this->smarty = $smarty;
	}

	public function display(){
		$this->smarty->display('login.display.tpl');
		
	}
	public function loginValidation(){
		$_SESSION['idUsuario'] = 1;
		echo json_encode(array("result"=>true));
	}
}
 ?>