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

              <div class="homepage-slide">

                <img src="<?php echo $slide['slide_image']['url']; ?>" />

              </div>

            </figure>

          </li>

          <?php } ?>

        </ul>

      </div>

    </div>

  </div>

  <div class="homepage-cta-wrap">

    <?php $cta_boxes = get_field('cta_boxes', 'option'); 

    foreach( $cta_boxes as $cta_box ) {
      $img_url = $cta_box['logo_image']['sizes']['large'];
      $link = $cta_box['link']; 

      if ( $link == 'gs-accessories' ) {
        $link_url = 'https://mygsaccessories.com';
      } else {
        $link_url = site_url() . '/' . $link; 
      }

      ?>

      <div class="cta-item">

        <a class="<?php echo $link; ?>" href="<?php echo $link_url; ?>">
          
          <img src="<?php echo $img_url; ?>" />

        </a>

      </div>


    <?php } ?>

  </div>

  <div class="gs-accessories-banner">

    <a href="https://mygsaccessories.com" target="_blank">
      
      <img src="<?php echo get_template_directory_uri() . '/assets/img/gs-accessories-banner.jpg'; ?>" />

    </a>

  </div>

</div>

<?php get_footer();