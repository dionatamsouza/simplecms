<?php 

$layout_context = "public";

require_once("../global_config.php");

require_once(SESSION_PATH); 
require_once(FUNCTIONS_PATH);  
require_once(VALIDATION_FUNCTIONS);
require_once(SESSION_PATH); 

?>

<?php 
   // check if the user is logged in already
    if(logged_in()){
      redirect_to("admin.php");
    }
 ?>

<?php
$username = "";

if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    // Attempt Login

		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
			// Mark user as logged in
			$_SESSION["admin_id"] = $found_admin["id"];
			$_SESSION["username"] = $found_admin["username"];
      $_SESSION["user_level"] = $found_admin["user_level"]; // is this user an admin? if so redirect him to specific area
      redirect_to("admin.php");
 
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
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


<section id="primary">

    <h2>Login</h2>
    <form action="login.php" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input class="inputLoginWidth" type="text" name="username" value="<?php echo htmlentities($username); ?>" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input class="inputLoginWidth" type="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td></td>
          <td> <input  type="submit" name="submit" value="login" /></td>
        </tr>
      </table><br><br>
      <a href="sign_up.php">Sign Up Here</a>
    </form>
</section>  


<?php require_once(FOOTER_PATH); ?>
