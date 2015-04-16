<?php require_once('../includes/functions.php') //relative to page that header file is included in ?>
<?php require_once("config.php"); ?>
<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $site_browser_title; ?></title>
    <link rel="stylesheet" href="stylesheets/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="stylesheets/responsive.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../includes/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea"
     });
    </script>
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1><?php echo $site_header_title; ?></h1>
        <h2><?php echo $site_secondary_header_title; ?></h2>
      </a>
      <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="listing.php">Buy</a></li>
            <li><a href="contact.php">Sell</a></li>
            <?php if(logged_in()){ ?>
            <li><a href="logout.php">logout</a></li>
            <?php } ?>
            <?php if(!logged_in()) {?>
            <li><a href="login.php">login</a></li>
            <?php } ?>
            
        </ul>
      </nav>
    </header>
    <div id="wrapper">


