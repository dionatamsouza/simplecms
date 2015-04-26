<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<section>
<b style="text-align:center;">Browse the list</b>
<ul id="gallery">
  <li>
    <a href="images/numbers-01.jpg">
      <img src="images/numbers-01.jpg" alt="">
      <p><b>Everest Shopping, Paypal based shopping site</b></p>
    </a>
  </li>
  <li>
    <a href="images/numbers-02.jpg">
      <img src="images/numbers-02.jpg" alt="">
      <p><b>CowMax,currently working, is a mini classified ads site I made for my friend sergio</b></p>
    </a>
  </li>
  <li>
    <a href="images/numbers-06.jpg">
      <img src="images/numbers-06.jpg" alt="">
      <p><b>Manager Reviews. A platform for reviewing managers</b></p>
    </a>
  </li>
  <li>
    <a href="images/numbers-09.jpg">
      <img src="images/numbers-09.jpg" alt="">
      <p><b>Date nepal-currently working-a dating site for Nepali people.</b></p>
    </a>
  </li>
  <li>
    <a href="images/numbers-12.jpg">
      <img src="images/numbers-12.jpg" alt="">
      <p><b>YU connect, Year Up connect is a social site for connecting Year Up Alumni. ongoing</b></p>
    </a>
  </li>
</ul>
</section>

<!--<div id="main">
  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) { ?>
			
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<?php echo nl2br(htmlentities($current_page["content"])); ?>
			
		<?php } else { ?>
			
			<p>Welcome!</p>
			
		<?php }?>
  </div>
</div> -->

<?php include("../includes/layouts/footer.php"); ?>
