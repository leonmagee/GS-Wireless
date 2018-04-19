<?php
/**
 * The header for our theme
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
									<a href="#">Plan Info <i class="fas fa-caret-down"></i></a>
									<ul class="sub-menu">
										<li><a href="<?php echo site_url(); ?>/lyca-mobile-plans">Lyca Mobile</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-plans">H2O Unlimited</a></li>
										<li><a href="<?php echo site_url(); ?>/easy-go-plans">Easy Go Unlimited</a></li>
										<li><a href="<?php echo site_url(); ?>/h2o-bolt-plans">Bolt 4G LTE</a></li>
									</ul>

								</li>

								<li>
									<a href="#">GSW Info <i class="fas fa-caret-down"></i></a>

									<ul class="sub-menu">
										<li><a href="<?php echo site_url(); ?>/about-us">About Us</a></li>
										<li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
									</ul>

								</li>

								<li>
									<a href="#">Dealers <i class="fas fa-caret-down"></i></a>

									<ul class="sub-menu">
										<li><a href="<?php echo site_url(); ?>/become-a-dealer">Become a Dealer</a></li>
										<li><a href="<?php echo site_url(); ?>/gs-posa-sign-up">GS Posa Sign Up</a></li>
									</ul>

								</li>
								
								<li>
									<a href="#">Log-In <i class="fas fa-caret-down"></i></a>

									<ul class="sub-menu">
										<li>
											<a href="https://h2odirectnow.com">H2O Direct Log-In</a>
										</li>
										<li>
											<a href="https://gsposa.instapayportal.com/login">GS Posa Log-In</a>
										</li>
										<li>
											<a href="https://pos.lycamobile.us/Login/POSLogin.aspx">Lyca Dealer Log-In</a>
										</li>
										<li>
											<a href="https://dsm.lycamobile.us">Lyca Agent Log-In</a>
										</li>
										<li>
											<a href="https://gs-wireless-h2o-ss.simtrackmanager.com/wp-login.php">STM H2O SS Log-In</a>
										</li>
										<li>
											<a href="https://gs-wireless-agents.simtrackmanager.com/wp-login.php">STM Agent Log-In</a>
										</li>
										<li>
											<a href="https://gs-wireless-dealers.simtrackmanager.com/wp-login.php">STM Dealer Log-In</a>
										</li>

									</ul>

								</li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

	</header>

	<div class="main-content-wrap cell">
