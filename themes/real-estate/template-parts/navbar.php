<nav class="navbar navbar-expand-lg navbar-light bg-light" id="site-navigation">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent>
  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container' => false,
					'menu_class' => 'navbar-nav mr-auto',
			
				)
			);
			?>
  <i class="logo">
  <a href="#"><?= getIcon('user'); ?></a>
  </i>
  </div>
  <br>
</nav>

