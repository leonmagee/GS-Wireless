<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GS_Wireless
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer cell">
		<div class="max-width-wrap">
			<div class="site-info">
				Copyright GS Wireless <?php echo date('Y'); ?>
				<span class="sep"> | </span>
				<i class="fa fa-lock" aria-hidden="true"></i> Secured with SSL 
				<span class="sep"> | </span>
				Site by <a href="https://levon.io" target="_blank">Levon.io</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</div><!-- body inner wrap -->
</body>
</html>
