<?php
/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */

get_header(); ?>

<div class="homepage-outer-wrap">

  <div class="homepage-slider">

    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">

      <div class="orbit-wrapper">

        <ul class="orbit-container">

          <?php

          $slides = get_field('homepage_slides', 'option');

          foreach( $slides as $slide ) { ?>

          <li class="orbit-slide">

            <figure class="orbit-figure">

              <div class="accessorie-slide">

                <img src="<?php echo $slide['slide_image']['url']; ?>" />

              </div>

            </figure>

          </li>

          <?php } ?>

        </ul>

      </div>

      <nav class="orbit-bullets">

        <?php $counter = 0; foreach ( $slides as $slide ) { ?>

        <button <?php if ($counter == 0) {echo 'class="is-active"';}?> data-slide="<?php echo $counter; ?>">
          <span class="show-for-sr">Slide <?php echo ($counter + 1); ?> details.</span>
        </button>

        <?php $counter++; } ?>

      </nav>

    </div>

  </div>

  <div class="homepage-slider-items">

  </div>

</div><!-- homepage outer wrap -->

<?php get_footer();