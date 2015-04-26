<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 15:50:46
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/layout/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1070769917553ced367c1438-23957869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dadad0afa2e049fc93849a42ecb199e596da5932' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/layout/admin/header.tpl',
      1 => 1430054275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1070769917553ced367c1438-23957869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553ced367c4ae8_03748320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ced367c4ae8_03748320')) {function content_553ced367c4ae8_03748320($_smarty_tpl) {?><html>
<head>
<title>Title</title>
<link rel="stylesheet" type="text/css" href="../public/stylesheets/admin.css" />
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0" />
<?php echo '<script'; ?>
 src="scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="scripts/general.js"><?php echo '</script'; ?>
>
</head>

<body>

	<div id="header">
		<div class="logo"><a href="#">CowMax Secure<span> Area</span></a></div>
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
			    <li><a href="manage_content.php">Manage Website Content</a></li>
			    <li><a href="manage_admins.php">Manage Admin Users</a></li>
			    <li><a href="logout.php">Logout</a></li>
			</ul>
		</div>

	<div class="content">
<?php }} ?>
