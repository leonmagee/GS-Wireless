<?php
/**
 * Template Name: H2O Prepaid Plans
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */

get_header(); 

/**
* @todo this will be a unique template, probably don't want the normal template wrapping
*/

$plans_array = get_field('plans', 'option'); ?>

<div id="primary" class="content-area-plans">

	<?php

	$plan = $plans_array[4];

	$banner_image_logo = $plan['plan_logo']['sizes']['large']; ?>

	<div class="plan-banner h2o-wireless">

		<img src="<?php echo $banner_image_logo; ?>" />

	</div>

	<div class="max-width-wrap">

		<main id="main" class="site-main">

			<div class="plan-wrap">

				<div class="plan-details-wrap">
					<div class="plan-details month-plan">
						<h4>Monthly Plan</h4>
					</div>
					<div class="plan-details nation-talk-text">
						<h4>Nationwide Talk & Text</h4>
					</div>
					<div class="plan-details lte-data">
						<h4>4G LTE Data</h4>
					</div>
					<div class="plan-details int-talk-text">
						<h4>Int'l Talk & Text</h4>
					</div>
					<div class="plan-details intl-minutes">
						<h4>Bonus Int'l Minutes</h4>
					</div>
					<div class="plan-details intl-credit">
						<h4>Bonut Int'l Credit</h4>
					</div>
				</div>


				<?php foreach( $plan['plans'] as $plan_details ) { ?>

				<div class="plan-details-wrap">

					<div class="plan-details month-plan">
						<span class="price"><span>$</span><?php echo $plan_details['monthly_plan']; ?></span>
						<span class="per">/per month</span>
					</div>
					<div class="plan-details nation-talk-text">
						<?php echo $plan_details['nationwide_talk_&_text']; ?>
					</div>
					<div class="plan-details lte-data">
						<?php echo $plan_details['4g_lte_data']; ?>
					</div>
					<div class="plan-details int-talk-text">
						<?php echo $plan_details['intl_talk_&_text']; ?>
					</div>
					<div class="plan-details intl-minutes">
						<?php echo $plan_details['bonus_intl_minutes']; ?>
					</div>
					<div class="plan-details intl-credit">
						<?php echo $plan_details['bonus_intl_credit']; ?>
					</div>
				</div>

				<?php } ?>

			</div>

		</main><!-- #main -->

	</div>

</div><!-- #primary -->

<?php

get_footer();
