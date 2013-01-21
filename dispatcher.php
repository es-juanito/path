<?php 
// Variables globales para conexión con la BD
require_once("core/config.php");
// Inclusion de archivos DAO's
// require_once("core/include_dao.php");
// Inclusion de motor de plantillas
require_once("assets/Smarty/Smarty.class.php");
// Variable de directorios de vistas
$dirs = array(
	'views/viewDefault',
	'views/viewDashboard',
	'views/viewLogin',
	'views/viewHome',
	'views/viewNotFound404'
	);
// Creación de objeto smarty
$smarty = new Smarty;
$smarty->setTemplateDir($dirs);
$smarty->compile_dir = 'assets/EngineSmarty/Templates_c/';
$smarty->config_dir = 'assets/EngineSmarty/Configs/';
$smarty->cache_dir = 'assets/EngineSmarty/Cache/';

// Controladores

require_once("controllers/controller.base.php");
require_once("controllers/login.controller.php");
require_once("controllers/default.controller.php");
require_once("controllers/notFound404.controller.php");
require_once("controllers/home.controller.php");

 ?>