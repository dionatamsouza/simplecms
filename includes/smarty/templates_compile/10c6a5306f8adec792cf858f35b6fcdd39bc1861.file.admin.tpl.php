<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 17:08:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:478490258553ced3675df85-27647434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c6a5306f8adec792cf858f35b6fcdd39bc1861' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/simplecms/includes/smarty/templates/admin.tpl',
      1 => 1430060874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478490258553ced3675df85-27647434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553ced3679e706_33371789',
  'variables' => 
  array (
    'title' => 0,
    'admin_set' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ced3679e706_33371789')) {function content_553ced3679e706_33371789($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1><p>Welcome to the admin area,<?php echo $_SESSION['username'];?>
</p></h1>
        <p>Here you can do administrative stuffs</p>

    
     <div id="box">
       <div class="box-top"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <div class="box-panel">
			<?php if (isset($_GET['manage_admins'])) {?>
			    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		    <table>
		        <tr>
		         <th style="text-align: left; width: 200px;">Username</th>
		         <th colspan="2" style="text-align: left;">Actions</th>
		        </tr>
		        <!--cid is the id of item in array item is the row so $i.id returns user id-->
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_set']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<tr>
			        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['username'];?>
</td>
			        <td><a href="edit_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a></td>
			        <td><a href="delete_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" onclick="return confirm('Are you sure?');">Delete</a></td>
		      	</tr>
				<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
				    No items were found in the search
				<?php } ?>

			</table>
			<?php }?>
	    </div>
    </div>

       

<?php echo $_smarty_tpl->getSubTemplate ("layout/admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
