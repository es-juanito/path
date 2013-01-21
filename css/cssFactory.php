<?php 
header('Content-type: text/css');
session_start();

if ($_SESSION['idUsuario']) {
	switch ($_GET['s']) {
		case 'login':
			require("../views/viewLogin/login.style.css");
			break;
		
		default:
			# code...
			break;
	}
}
 ?>