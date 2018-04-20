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

$plans_array = get_field('prepaid_plans', 'option'); ?>

<div id="primary" class="content-area-plans">

	<?php

	$plan = $plans_array[0];

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
					<div class="plan-details talk-text">
						<h4>Talk & Text</h4>
					</div>
					<div class="plan-details mms">
						<h4>MMS</h4>
					</div>
					<div class="plan-details data">
						<h4>Data</h4>
					</div>
					<div class="plan-details expiration">
						<h4>Expiration</h4>
					</div>
				</div>


				<?php foreach( $plan['plans'] as $plan_details ) { ?>

				<div class="plan-details-wrap">

					<div class="plan-details month-plan">
						<span class="price"><span>$</span><?php echo $plan_details['monthly_plan']; ?></span>
						<span class="per">/per month</span>
					</div>
					<div class="plan-details talk-text">
						<?php echo $plan_details['talk_&_text']; ?>
					</div>
					<div class="plan-details mms">
						<?php echo $plan_details['mms']; ?>
					</div>
					<div class="plan-details data">
						<?php echo $plan_details['data']; ?>
					</div>
					<div class="plan-details expiration">
						<?php echo $plan_details['expiration']; ?>
					</div>
				</div>

				<?php } ?>

			</div>

		</main><!-- #main -->

	</div>

</div><!-- #primary -->

<?php

get_footer();
