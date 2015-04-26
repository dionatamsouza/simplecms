<?php 

// Database connections stuffs
define("DB_SERVER", "localhost"); // DATABASE HOST
define("DB_USER", "superadmin");  // DATABASE USERNAME
define("DB_PASS", "superadmin");  // DATABASE PASSWORD
define("DB_NAME", "simplecms");  // DATABASE NAME

// 1. Create a database connection
$connection = (mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME))?:mysqli_connect_error();
// Test if connection succeeded

define("PARENT_DIR", $_SERVER["DOCUMENT_ROOT"] . "/simplecms"); // Root Directory
define("INC_DIR", PARENT_DIR . "/includes");
define("PUBLIC_DIR", PARENT_DIR . "/public");
define("LAYOUT_DIR", ($layout_context=="admin")?INC_DIR ."/layouts/admin": INC_DIR . "/layouts");

// DEFINE Documents path
define("FILE_EXTENSION",".php");
define("SLASH","/");
// Lists of file path
define("FUNCTIONS_PATH", INC_DIR . SLASH . "functions" . FILE_EXTENSION);
define("SESSION_PATH", INC_DIR . SLASH . "session" . FILE_EXTENSION);
define("HEADER_PATH", LAYOUT_DIR . SLASH . "header" . FILE_EXTENSION);
define("FOOTER_PATH",  LAYOUT_DIR . SLASH . "footer" . FILE_EXTENSION);
define("VALIDATION_FUNCTIONS", INC_DIR . SLASH . "validation_functions" . FILE_EXTENSION);

/*Sites related stuffs*/
// Appear on browser window
$site_browser_title = "SimpleCMS | YourName"; 

// Appears on top header
$site_header_title = "SimpleCMS";
$site_secondary_header_title = "SimpleCMS";

// Appears on individual page
$site_page_title = "";

// Appears on footer
$site_footer_copy_right_text = "Copyright " . date('Y') . " SimpleCMS Inc. All Right Reserved";
$site_footer_linkedin_link = "https://google.com";
$site_footer_facebook_link = "";
$site_footer_twitter_link = "";


?>