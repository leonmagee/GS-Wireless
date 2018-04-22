<?php
/**
 * Template Name: Flag Tester
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="max-width-wrap">
			<main id="main" class="site-main">


				<?php

				$flags = get_field('country_flags', 'option');



				foreach ( $flags as $flag ) {
					d($flag); ?>


<p><button class="button" data-open="<?php echo $flag['slug']; ?>">Open <?php echo $flag['name']; ?></button></p>

<div class="reveal wider-width" id="<?php echo $flag['slug']; ?>" data-reveal>
  <h1><?php echo $flag['name']; ?></h1>
  <img src="<?php echo $flag['image']['url']; ?>" />
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


				<?php } ?>









			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
