<?php 
?>
<nav class="site-navigation">
  <div class="container" id="logo">
    <?php 
      if(function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>
  </div>
</nav>