<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GS_Wireless
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('gs-wireless'); ?>>
	<div class="grid-y main-grid-wrap">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gs-wireless' ); ?></a> -->

		<header id="masthead" class="site-header cell">

			<div class="max-width-wrap">

				<div class="grid-x">

					<div class="cell large-4">

						<div class="site-branding">

							<?php if ( $img_url = get_field('site_logo', 'option') ) { ?>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo $img_url; ?>" />
							</a>

							<?php } else { ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'title' ); ?>
								</a>
							</h1>
							<?php } ?>

							<div class="menu-toggle">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div><!-- .site-branding -->

					</div>

					<div class="cell large-8">

						<nav id="site-navigation-custom" class="main-navigation-custom menu-hidden">

							<ul id="first_name" class="menu">

								<li>
									<a href="/plan-info">Plan Info <i class="fas fa-caret-down"></i></a>
									<ul class="sub-menu">
										<li><a href="<?php echo site_url(); ?>/lyca-mobile-plans">Lyca Mobile</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-plans">H2O Unlimited</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-plans">Easy Go Unlimited</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-plans">Bolt 4G LTE</a></li>
									</ul>

								</li>
								<li><a href="/about">GSW Info <i class="fas fa-caret-down"></i></a></li>
								<li>
									<a href="/contact">Dealers <i class="fas fa-caret-down"></i></a>

									<ul class="sub-menu">
										<li><a href="<?php echo site_url(); ?>/lyca-mobile-plans">Become a Dealer</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-plans">GS Posa Sign Up</a></li>
									</ul>

								</li>

								<?php if ( ! LV_LOGGED_IN_ID ) { ?>

								<li>
									<a data-open="login-modal">
										Log In
										<sep>/</sep>
										Sign Up
									</a>
								</li>


								<?php } else { ?>

								<li>
									<a href="<?php echo wp_logout_url( site_url() ); ?>">Log Out</a>
								</li>

								<?php } ?>

							</ul>




							<?php
					// wp_nav_menu( array(
					// 	'theme_location' => 'menu-1',
					// 	'menu_id'        => 'primary-menu',
					// ) );
							?>
						</nav><!-- #site-navigation -->

					</div>

				</div>
			</div>

			<?php
		/**
		 *  Login Modal
		 */
		$log_in_modal = new mp_output_modal_login(
			'login-modal',
			'Log In',
			true
		);
		$log_in_modal->output_modal();
		?>

	</header><!-- #masthead -->

	<div class="main-content-wrap cell">
