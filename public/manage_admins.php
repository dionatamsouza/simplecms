<?php 

 $layout_context = "admin";

 require_once("../global_config.php"); 

 require_once(SESSION_PATH);
 require_once(FUNCTIONS_PATH);

 confirm_logged_in(); 
 confirm_admin();

?>

<?php $admin_set = find_all_admins(); ?>

<?php require_once(HEADER_PATH); ?>

<div id="main">
  <div id="navigation">
		<br />
		<a href="admin.php">&laquo; Main menu</a><br />
  </div>
  <div id="page">
    <?php echo message(); ?>
    <h2>Manage Admins</h2>
    <table>
      <tr>
        <th style="text-align: left; width: 200px;">Username</th>
        <th colspan="2" style="text-align: left;">Actions</th>
      </tr>
    <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
      <tr>
        <td><?php echo htmlentities($admin["username"]); ?></td>
        <td><a href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a></td>
        <td><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
      </tr>
    <?php } ?>
    </table>
    <br />
    <a href="new_admin.php">Add new admin</a>
  </div>
</div>
<?php require_once(FOOTER_PATH); ?>

