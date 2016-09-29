	<div class="clear"></div>
	</div><!--.container-->
	<div id="footer"><footer>
		<div class="row footer-item" style="margin: 0 !important;">
			<a href="<?php echo home_url(); ?>/daily-surf"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-1.jpg ?>"><span class="item-footer-1">Surf </span></div></a>
			<a href="<?php echo home_url(); ?>/surf-shop"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-2.jpg ?>"><span class="item-footer-2">Surf <br> Shop</span></div></a>
			<a href="<?php echo home_url(); ?>/real-estate"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-3.jpg ?>"><span class="item-footer-3">Real <br> Estate </span></div></a>
			<a href="<?php echo home_url(); ?>/beaches"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-4.jpg ?>"><span class="item-footer-4">Beaches </span></div></a>
			<a href="<?php echo home_url(); ?>/other-fun"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-3.jpg ?>"><span class="item-footer-5">Other <br> Fun</span></div></a>
			<a href="<?php echo home_url(); ?>/transport"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-4.jpg ?>"><span class="item-footer-6">Transport</span></div></a>
			<a href="<?php echo home_url(); ?>/learning"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-1.jpg ?>"><span class="item-footer-7">Learn 2 <br> Surf</span></div></a>
			<a href="<?php echo home_url(); ?>/blog"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/footer-2.jpg ?>"><span class="item-footer-8">Blog</span></div></a>
									
		</div>

		<div class="container" style="padding-bottom: 20px;">
			<h1 class="title-sjs">Interested in Real Estate?</h1>
			<p class="sjs-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor ac velit vel viverra. Phasellus quis ligula lorem. Curabitur fringilla ipsum vitae ante viverra, vitae pellentesque ipsum sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis quis nulla id purus tempus gravida in vitae nulla. Pellentesque eu nisi sit amet metus molestie sagittis eget maximus mauris. Vivamus sed lorem hendrerit, semper quam non, varius eros.</p>

			<p class="sjs-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor ac velit vel viverra. Phasellus quis ligula lorem. Curabitur fringilla ipsum vitae ante viverra, vitae pellentesque ipsum sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis quis nulla id purus tempus gravida in vitae nulla. Pellentesque eu nisi sit amet metus molestie sagittis eget maximus mauris. Vivamus sed lorem hendrerit, semper quam non, varius eros.</p>

			<div class="horizontalLineFooter"></div>
		</div>

			<div class="container">
				<div class="row" style="margin: 0 !important;">

					<div class="col-md-offset-2 col-md-2">
						<h4>Follow us</h4>
						<div>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.jpg ?>"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg ?>"></a>
						</div>
					</div>
					
					<div class="col-md-2">
						<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>
							<div id="nav-footer" class="nav"><nav>
								<?php // wp_nav_menu( array('theme_location' => 'footer-menu' )); /* editable within the Wordpress backend */ ?>
							</nav></div><!--#nav-footer-->
					</div>

					<div class="col-md-3">
						<h4>Links</h4>
						<div class="menu-main-menu-container">
						<nav>
							<ul class="blog-menu">
								<a href="#"><li>Blog</li></a>
								<a href="#"><li>Real Estate</li></a>
								<a href="#"><li>Rancho Chilamate</li></a>
								<a href="#"><li>Sailing</li></a>
							</ul>
						</nav>
						</div>
					</div>
				</div>
			</div>

			<div class="container" id="copyright">
				<div class="col-md-5">
					<p>Copyright SanJuanSurf 2016</p>
				</div>
				<div class="col-md-5">
					<p>More Surf, Less Work</p>
				</div>
			</div>
			
	</footer></div><!--#footer-->
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>