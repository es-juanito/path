<?php 
session_start();
require_once("dispatcher.php");

echo "hay cambios";


//	OPERACIONES CON UNA SESION DE USUARIO
if(isset($_SESSION['idUsuario'])){
	// print_r($_GET);
	// SI EXISTE SESION DE USUARIO Y SI HAY VARIABLE GET 'P'
	if(isset($_GET['p'])){
		require_once("assets/EnginePHP/getRequest.engine.php");
	}else{
		if(count($_GET) == 0)
			$body = new home($smarty);

	}

	// SI EXISTE SESION DE USUARIO Y SI HAY VARIABLES GET PERO NO EXISTE LA VARIABLE GET 'P'
	if(count($_GET) > 0 && !isset($_GET['p'])){
		$body = new notFound404($smarty);
	}

	// SI EXISTE SESION DE USUARIO Y SI HAY ERROR
	if(isset($_GET['error'])){
		$body = new notFound404($smarty);
	}

	if($body  instanceof notFound404){
		$body->display();
		return;
	}
	
	// DISPLAY
	$smarty->display('header.display.tpl');
	
	$body->display();
	
	$smarty->display('footer.display.tpl');
}








//	PETICIONES XHR
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	if(isset($_POST['a'])){
		require_once("assets/EnginePHP/postRequest.engine.php");
	}
}







//	OPERACIONES SIN SESION DE USUARIO
if(!isset($_SESSION['idUsuario']) ){

	// SI NO EXISTE SESION DE USUARIO Y NO HAY ERROR
	if(!isset($_GET['error'])){
		// SI HAY VARIABLES GET Y NO ESTA LA VARIABLE GET 'P'
		if(count($_GET) > 0 ){
			$body = new notFound404($smarty);
			$body->display();
			return;
		}
		$body  = new login($smarty);
		$body->display();
		return;
	}

	// SI NO EXISTE SESION DE USUARIO Y SI HAY ERROR
	if(isset($_GET['error'])){
		$body = new notFound404($smarty);
		$body->display();
		return;
	}	
}






 // unset($_SESSION['idUsuario']);
 ?>
