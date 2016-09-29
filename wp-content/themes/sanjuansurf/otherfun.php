<?php /* Template Name: Other Fun Template */ ?>
        <?php get_header(); ?>

<main role="main">
		<!-- section -->
		<section class="widthReasonable">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                
                


                <?php  the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2>Sorry, nothing to display</h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
			</div>

		<div class="row footer-item fun-item" style="margin: 0 !important; padding-top: 40px;">
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-1">Sail</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-2">Ride</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-3">Canopy</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-4">Turtles</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-5">Yoga & <br> Dance</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-6">Boat</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-7">Evening</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-8">Learn <br> Spanish</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-1">Granada</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-2">Leon</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-3">Ometepe</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-4">Matagalpa</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-5">Volcano & <br> Board</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-8">Masaya</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-6">Corn <br> Islands</span></div></a>
			<a href="#"><div class="col-md-3 col-sm-4 col-xs-6" ><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/phi.jpg ?>"><span class="item-footer-7">Rio <br>San Juan</span></div></a>
			
									
		</div>

			<div class="container">
				<div class="horizontalLineFooter"></div>
			</div>
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
