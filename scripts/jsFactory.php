<?php 
header('Content-type: application/javascript');

switch ($_GET['f']) {
	case 'login':
		require("../views/viewLogin/login.function.js");
		break;
	
	default:
		# code...
		break;
}

 ?>