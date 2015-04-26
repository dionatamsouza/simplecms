
<?php 

  $layout_context = "admin"; 
  require_once("../global_config.php");
  require_once(SESSION_PATH); 
  require_once(FUNCTIONS_PATH);
  require_once(VALIDATION_FUNCTIONS);
  confirm_logged_in();
  confirm_admin(); 

  // Get the server request URI and chop it
  switch(true){

    case (isset($_GET["manage_admins"])):
        $admin_set = mysqli_fetch_all(find_all_admins(),MYSQLI_ASSOC); 
        $smarty->assign("admin_set",$admin_set);
        $smarty->assign("title","Manage Admin");
    break;

    case (isset($_GET["edit_admin"]) && isset($_GET["id"]) && !empty($_GET["id"])):

          $admin = find_admin_by_id($_GET["id"]);
          $smarty->assign("title","Edit Admin");
          $smarty->assign("admin",$admin);

          if (isset($_POST['submit'])) {
          // Process the form
          // validations
          $required_fields = array("username", "password");
          validate_presences($required_fields);
          
          $fields_with_max_lengths = array("username" => 30);
          validate_max_lengths($fields_with_max_lengths);
          
          if (empty($errors)) { 
            // Perform Update
            $id = $admin["id"];
            $username = mysql_prep($_POST["username"]);
            $hashed_password = password_encrypt($_POST["password"]);
          
            $query  = "UPDATE admins SET ";
            $query .= "username = '{$username}', ";
            $query .= "hashed_password = '{$hashed_password}' ";
            $query .= "WHERE id = {$id} ";
            $query .= "LIMIT 1";
            $result = mysqli_query($connection, $query);

            if ($result && mysqli_affected_rows($connection) == 1) {
              // Success
              $_SESSION["message"] = "Admin updated.";
              redirect_to("manage_admins.php");
            } else {
              // Failure
              $_SESSION["message"] = "Admin update failed.";
            }
          
          }
        } else {
          // This is probably a GET request
          
        } // end: if (isset($_POST['submit']))

    break;

    case (isset($_GET["new_admin"])):

          $smarty->assign("title","New Admin");

          if (isset($_POST['submit'])) {
            // Process the form
            
            // validations
            $required_fields = array("username", "password");
            validate_presences($required_fields);
            
            $fields_with_max_lengths = array("username" => 30);
            validate_max_lengths($fields_with_max_lengths);
            
            if (empty($errors)) {
              // Perform Create

              $username = mysql_prep($_POST["username"]);
              $hashed_password = password_encrypt($_POST["password"]);
              
              $query  = "INSERT INTO admins (";
              $query .= "  username, hashed_password";
              $query .= ") VALUES (";
              $query .= "  '{$username}', '{$hashed_password}'";
              $query .= ")";
              $result = mysqli_query($connection, $query);

              if ($result) {
                // Success
                $_SESSION["message"] = "Admin created.";
                redirect_to("admin.php?manage_admins");
              } else {
                // Failure
                $_SESSION["message"] = "Admin creation failed.";
              }
            }
          } else {
            // This is probably a GET request
            
          } // end: if (isset($_POST['submit']))

    break;

  }


$smarty->display("admin.tpl");


?>


