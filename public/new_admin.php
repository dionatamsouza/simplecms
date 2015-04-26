<?php $layout_context = "admin"; ?>
<?php require_once("../global_config.php"); ?>
<?php require_once(SESSION_PATH); ?>
<?php require_once(FUNCTIONS_PATH); ?>
<?php require_once(VALIDATION_FUNCTIONS); ?>
<?php confirm_logged_in(); ?>
<?php confirm_admin(); ?>


<?php
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
      redirect_to("manage_admins.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin creation failed.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php require_once(HEADER_PATH); ?>
<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>
    
    <h2>Create Admin</h2>
    <form action="new_admin.php" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" value="" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Create Admin" /></td>
        </tr>
      </table>
    </form>
    <br />
    <a href="manage_admins.php">Cancel</a>
  </div>
</div>

<?php require_once(FOOTER_PATH); ?>
