<?php /* Template Name: Beaches Template */ ?>
        <?php get_header(); ?>

<main role="main">
		<!-- section -->
		<section class="widthReasonable">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


               
               

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

					 <!-- CHECK OUT REPEATER "gallery-repeater" -->
					<?php if( have_rows('beach', 24) ): ?>

					   <!-- CHECK TO SEE IF IT HAS ROWS IN IT -->
					   <?php while ( have_rows('beach', 24) ) : the_row(); ?>

					     <!-- DISPLAY THE TEXT-FIELD THEN ASSIGN OUR GALLERY TO VARIABLE $images -->
					  <div class="container" id="beaches-sjs">
					    <h1 class="title-sjs"> <?php the_sub_field('beach_name'); ?></h1>

					    <p class="sjs-paragraph"><?php the_sub_field('beach_description'); ?></p>
					  </div>
					    <div class="row" style="margin: 0 !important; padding: 10px 0;">
					    <?php 
					     $images = get_sub_field('beach_gallery'); 

					     if( $images ):?>
					        <?php foreach( $images as $image ): ?>
					       <div class="col-md-3 col-sm-6" style="padding: 0; !important">
					       		 <img class="img-responsive" style="width:100%; height: 300px;" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
					       </div>
						  
					        <?php endforeach; ?>
					     <?php endif; ?>

					     </div>

					     <?php

					   endwhile;
					else :
					// no rows found
					endif; ?>
                


	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
