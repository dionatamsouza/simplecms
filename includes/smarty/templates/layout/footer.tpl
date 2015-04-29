<?php require_once("config.php"); ?>
<footer>
  <a href="<?php output($site_footer_twitter_link); ?>"><img src="images/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
  <a href="<?php output($site_footer_linkedin_link); ?>" target="_new"><img src="images/linkedin.png" alt="Linkedin Logo" class="social-icon"></a>
  <p><b>&copy; copyright 2015</b></p>
</footer>
</div>
</body>
</html>

<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
