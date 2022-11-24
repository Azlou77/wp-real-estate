<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="site-navigation">  
  <div class="collapse navbar-collapse" id="navbarSupportedContent>
  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container' => true,
					'menu_class' => 'navbar-nav mr-auto',
			
				)
			);
			?>
			<?php get_search_form()?>
  </div>
  <br>
</nav>
</div>


