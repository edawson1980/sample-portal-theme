<?php
/**
* Template Name: Work template
* Description: two-column layout with sidebar
 */

get_header(); ?>

<div>
	<div>
		<main>
			<div class="content">
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail($size = 'medium'); ?>

							<?php
							if ( have_posts() ) :
				          while ( have_posts() ) : the_post();
									the_content();
				        endwhile;
				      endif;
				      ?>
						</div>
						<div class="column">
							<?php get_sidebar(); ?>
						</div>

					</div>
			</div>

			</div>

		</main>
	</div>
</div>

<?php
get_footer();
