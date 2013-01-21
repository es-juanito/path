<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 22:43:40
         compiled from "views/viewLogin/login.display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198129131750980383c7abc1-65080265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e429081784efe519c32df1f8ae0dc212b5b64dd' => 
    array (
      0 => 'views/viewLogin/login.display.tpl',
      1 => 1358545416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198129131750980383c7abc1-65080265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50980383cd9e39_86715217',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50980383cd9e39_86715217')) {function content_50980383cd9e39_86715217($_smarty_tpl) {?><html>
<head>
	<title>Iniciar Sesión</title>
	<meta name="name" content="content" charset="utf-8">
	<!-- <link rel="stylesheet" href="/css/style.css"> -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="scripts/jsFactory.php?f=login" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
	<div>
		<form action="" method="post" name="form" accept-charset="utf-8">
			<input type="text" name="login" value="" placeholder="texto">
			<button type="button" id="signIn">Enviar</button>
		</form>
		
	</div>

<?php }} ?>