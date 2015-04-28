<?php 


// Set Default Language
require_once("includes/lang/np.php");

define("SET_DEFAULT_LANG", "PathOfLang");

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

//templating stuffs
define("SMARTY_DIR_PATH", INC_DIR . "/smarty/libs/Smarty.class.php");
require_once(SMARTY_DIR_PATH);
$smarty = new Smarty;
//$smarty->caching = false;
//$smarty->cache_lifetime = 120;
$smarty->cache_dir = INC_DIR . "/smarty/cache";
$smarty->template_dir = INC_DIR . "/smarty/templates";
$smarty->compile_dir = INC_DIR . "/smarty/templates_compile";

/*Sites related stuffs*/
define("SITE_TITLE", "SimpleCMS | YourName"); // Appear on browser window
define("SITE_HEADER_TITLE", "SimpleCMS");
define("SITE_HEADER_SECONDARY_TITLE", "SimpleCMS"); // Appears on top header
define("SITE_PG_TITLE", "value"); // Appears on individual page

// Appears on footer
define("SITE_FOOTER_CP_RIGHT_TEXT", "Copyright " . date('Y') . " SimpleCMS Inc. All Right Reserved");
define("SITE_FOOTER_LINKEDIN_URL", "");
define("SITE_FOOTER_FB_URL", "link");
define("SITE_FOOTER_TWITTER_URL", "link");

?>