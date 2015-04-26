<?php 

// Database connections stuffs
define("DB_SERVER", "localhost"); // DATABASE HOST
define("DB_USER", "superadmin");  // DATABASE USERNAME
define("DB_PASS", "superadmin");  // DATABASE PASSWORD
define("DB_NAME", "simplecms");  // DATABASE NAME

// 1. Create a database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection succeeded
if(mysqli_connect_errno()) {
	die("Database connection failed: " . 
	mysqli_connect_error() . 
	" (" . mysqli_connect_errno() . ")"
	);
}


define("PARENT_DIR", $_SERVER["DOCUMENT_ROOT"] . "/simplecms"); // Root Directory
define("INC_DIR", PARENT_DIR . "/includes");
define("PUBLIC_DIR", PARENT_DIR . "/public");

if($layout_context == "admin"){
	define("LAYOUT_DIR", INC_DIR . "/layouts/admin");
}else{
	define("LAYOUT_DIR", INC_DIR . "/layouts");
}

// DEFINE Documents path
define("FILE_EXTENSION",".php");
define("SLASH","/");

// Lists of file path
define("FUNCTIONS_PATH", INC_DIR . SLASH . "functions" . FILE_EXTENSION);
define("SESSION_PATH", INC_DIR . SLASH . "session" . FILE_EXTENSION);
define("HEADER_PATH", LAYOUT_DIR . SLASH . "header" . FILE_EXTENSION);
define("FOOTER_PATH",  LAYOUT_DIR . SLASH . "footer" . FILE_EXTENSION);
define("VALIDATION_FUNCTIONS", INC_DIR . SLASH . "validation_functions" . FILE_EXTENSION);


?>