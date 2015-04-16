<?php 

//Extension of files
@define(EXTENSION, ".php");

// get the parent directory cowmax in this case
@define(BASE_DIR, basename(dirname($_SERVER['PHP_SELF']))); 

// Get include dir path
@define(INC_PATH, BASE_DIR . '/includes/');

// Get layout dir path
@define(LAYOUT_PATH, INC_PATH . 'layouts/');

//layout file path
@define(LAYOUT_HTML_HEADER_PATH, INC_PATH . LAYOUT_PATH.'header'.EXTENSION);
@define(LAYOUT_HTML_FOOTER_PATH, INC_PATH . LAYOUT_PATH.'footer'.EXTENSION);

// layout admin path
@define(LAYOUT_ADMIN_PATH, LAYOUT_PATH.'admin/');

//Layout admin file path
@define(LAYOUT_HTML_ADMIN_HEADER_PATH, INC_PATH . LAYOUT_ADMIN_PATH.'header'.EXTENSION);
@define(LAYOUT_HTML_ADMIN_FOOTER_PATH, INC_PATH . LAYOUT_ADMIN_PATH.'footer'.EXTENSION);


?>