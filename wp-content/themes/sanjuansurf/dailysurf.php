<?php /* Template Name: Daily Surf Template */ ?>
        <?php get_header(); ?>

<main role="main">
		<!-- section -->
		<section class="widthReasonable">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                
                


                <?php  the_content(); ?>
                <h1 class="title-sjs">Daily Surf Photos</h1>

                

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
		<?php

					// check if the repeater field has rows of data
					if( have_rows('dailysurf', 4) ):

					 	// loop through the rows of data
					    while ( have_rows('dailysurf', 4) ) : the_row();

					        // display a sub field value
					        the_sub_field('sub_field_name');

					        ?>

					        <div class="image-container  background-daily-image" style="background: url(<?php the_sub_field('daily_surf_image');?>);">
					        </div>
					        <div class="inf-image container">
					        	<p class="sjs-paragraph"><?php the_sub_field('daily_surf_description'); ?></p>
					        </div>

					        <?php
					    endwhile;

					else :

					    // no rows found

					endif;

					?>
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
