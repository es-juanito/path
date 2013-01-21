<?php 
switch ($_GET['p']) {
	case 'default':
		$body = new viewDefault($smarty);
		break;
	case 'home':
		$body = new home($smarty);
		break;
	
	default:
		$body = new notFound404($smarty);
		break;
}
?>