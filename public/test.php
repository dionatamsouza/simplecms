<?php $layout_context=""; ?>
<?php include('../global_config.php');

$smarty->assign('hello', 'Doug');
$smarty->display('admin.tpl');

?>