
<?php $layout_context = "admin"; ?>
<?php require_once("../global_config.php"); ?>
<?php require_once(SESSION_PATH); ?>
<?php require_once(FUNCTIONS_PATH); ?>
<?php require_once(VALIDATION_FUNCTIONS); ?>
<?php confirm_logged_in(); ?>
<?php confirm_admin(); ?>

<!-- Grab admin header -->
<?php include(HEADER_PATH); ?>

        <h1><p>Welcome to the admin area, <?php echo htmlentities($_SESSION["username"]); ?>.</p></h1>
        <p>Here you can do stuffz</p>

        <div id="box">
          <div class="box-top">News</div>
          <div class="box-panel">
            This is some simple news lalallalala
          </div>
        </div>

        <div id="box">
          <div class="box-top">News</div>
          <div class="box-panel">
            This is some simple news lalallalala
          </div>
        </div>

        <div id="box">
          <div class="box-top">News</div>
          <div class="box-panel">
            Quisque pretium scelerisque porttitor. Integer consectetur leo a augue auctor interdum. Suspendisse purus ex, feugiat vel erat at, molestie malesuada dui. Suspendisse venenatis leo sit amet orci malesuada, sit amet interdum augue dignissim. Sed scelerisque augue non laoreet pellentesque. Cras feugiat purus nisi, vel dictum urna dictum id. Quisque et orci vel elit tempus efficitur in eu nisi. Suspendisse eget enim massa. Sed quis magna pretium, mattis elit ac, mollis arcu.
          </div>
        </div>
      

<?php include("../includes/layouts/admin/footer.php"); ?>
