<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php 
   // check if the user is logged in already
    if(isset($_SESSION["username"])){
      redirect_to("admin.php");
    }
 ?>

<?php
$username = "";

if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("firstname","lastname","username","email","password", "password1");
  validate_presences($required_fields);
  // sign up functionality added
  if (empty($errors)) {

    //check if the password == password1
    if($_POST["password"] == $_POST["password1"]){
    
      //first name
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $current_year = $_POST["current_year"];
      // cleanse the data
      $firstname = mysql_prep($_POST["firstname"]);
      $lastname = mysql_prep($_POST["lastname"]);
      $username = mysql_prep($_POST["username"]);
      $hashed_password = password_encrypt($_POST["password"]);
      $email = mysql_prep($_POST["email"]);
      $current_year = mysql_prep($_POST["current_year"]);

       // Attempt sign up
        
      $query  = "INSERT INTO admins (";
      $query .= "  first_name, last_name, email, username, hashed_password";
      $query .= ") VALUES (";
      $query .= "  '{$firstname}', '{$lastname}','{$email}', '{$username}','{$hashed_password}'";
      $query .= ")";
      $result = mysqli_query($connection, $query);
      
      if ($result) {
        // Success
        // sucessfully signed up
        $_SESSION["message"] = "sucessfully sign up.Please proceed to login page for login.";
      } else {
        // Failure
        $_SESSION["message"] = "Signed up failed.Please try again.";
      }
    }else{
      // password not match sign up
      echo 'Password doesn\'t match';
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
 
<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>


<section id="primary">

    <h2>Login</h2>
    <form action="sign_up.php" method="post">
      <table>
        <tr>
          <td>Firstname:</td>
          <td><input class="inputLoginWidth" type="text" name="firstname" value="<?php if(isset($firstname)) echo $firstname; ?>" /></td>
        </tr>
        <tr>
          <td>Lastname:</td>
          <td><input class="inputLoginWidth" type="text" name="lastname" value="<?php if(isset($lastname)) echo $lastname; ?>" /></td>
        </tr>
        <tr>
          <td>username:</td>
          <td><input class="inputLoginWidth" type="text" name="username" value="<?php if(isset($username)) echo $username; ?>" /></td>
        </tr>
        <tr>
          <td>email:</td>
          <td><input class="inputLoginWidth" type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input class="inputLoginWidth" type="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input class="inputLoginWidth" type="password" name="password1" value="" /></td>
        </tr>
        <tr>
          <td>What Year is this? </td>
          <td><input class="inputLoginWidth" type="text" name="current_year" value="<?php if(isset($current_year)) echo $current_year; ?>" /></td>
        </tr>
        <tr>
          <td></td>
          <td> <input  type="submit" name="submit" value="Sign Up!" /></td>
        </tr>
      </table><br><br>
    </form>
</section>  


<?php include("../includes/layouts/footer.php"); ?>
