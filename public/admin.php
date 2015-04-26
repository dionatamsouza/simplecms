
<?php 

  $layout_context = "admin"; 
  require_once("../global_config.php");
  require_once(SESSION_PATH); 
  require_once(FUNCTIONS_PATH);
  require_once(VALIDATION_FUNCTIONS);
  confirm_logged_in();
  confirm_admin(); 

  if(isset($_GET["manage_admins"])){

      $admin_set = mysqli_fetch_all(find_all_admins(),MYSQLI_ASSOC); 
      $smarty->assign("admin_set",$admin_set);
      $smarty->assign("title","Manage Admin");
  }

  $smarty->display("admin.tpl");


?>


