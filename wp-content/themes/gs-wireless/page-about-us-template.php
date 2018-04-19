<?php
/**
 * Template Name: Deprecated
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div class="max-width-wrap">
		<main id="main" class="site-main">

			<div class="video-embed-wraps">

				<div class="video-item">
					<?php 
					$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?v=yYOn6aH2N9M&feature=youtu.be&showinfo=0&modestbranding=1' ); 
					echo $embed_code; 
					?>
				</div>
				
				<div class="video-item">
					<?php 
					$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?v=MSGl2T2f5mc&feature=youtu.be&showinfo=0&modestbranding=1' ); 
					echo $embed_code; 
					?>

				</div>

			</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
