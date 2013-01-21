<?php 
switch ($_POST['a']) {
	case 'value':
		# code...
		break;
	case 'log':
		$login = new login($smarty);
		$login->loginValidation();
		return;
	default:
		# code...
		break;
}
?>