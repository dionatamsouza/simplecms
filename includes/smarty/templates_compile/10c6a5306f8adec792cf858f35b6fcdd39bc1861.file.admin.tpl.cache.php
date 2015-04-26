<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 15:49:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:809834201553ce16d711ba5-39886654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c6a5306f8adec792cf858f35b6fcdd39bc1861' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/admin.tpl',
      1 => 1430056191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809834201553ce16d711ba5-39886654',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553ce16d739312_90209841',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ce16d739312_90209841')) {function content_553ce16d739312_90209841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


	<?php if (isset($_GET['manage_admins'])) {?>
	<p>hello</p>
	<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("layout/admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
