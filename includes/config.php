<?php
	define("DB_SERVER", "localhost"); // DATABASE HOST
	define("DB_USER", "superadmin");  // DATABASE USERNAME
	define("DB_PASS", "superadmin");  // DATABASE PASSWORD
	define("DB_NAME", "simplecms");  // DATABASE NAME

  define("SITENAME", "Simple CMS");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }



?>
