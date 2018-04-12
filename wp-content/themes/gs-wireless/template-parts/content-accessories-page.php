<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content single-accessory">
        <?php

        $wholesale_price = get_field('wholesale_price');

        $retail_price = get_field('retail_price');
        
        $description = get_field('accessory_text');

        $protections = get_field('accessory_protections');

        $features = get_field('accessory_features');

        $additional_features = get_field('additional_features');
        $add_features_array = array();
        if ( $additional_features ) {
            foreach( $additional_features as $feature ) {
                $add_features_array[] = $feature['feature'];
            }
            $combined_features = array_merge($features, $add_features_array);
        } else {
         $combined_features = $features; 
     }

     $colors = get_field('accessory_colors');

     if ( $colors ) {
        $border_class = 'border-class';
    } else {
        $border_class = '';
    }

    ?>
    <div class="grid-x">
        <div class="image-wrap cell large-5">
            <?php $image_gallery = get_field('image_gallery');


            if ( $image_gallery && $img_featured = array_shift($image_gallery)) { ?>
                <div class="img-wrap-bg">
                    <a href="<?php echo $img_featured['sizes']['large']; ?>" rel="lightbox">
                        <img src="<?php echo $img_featured['sizes']['accessory_image']; ?>" />
                    </a>
                </div> 
                <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-image.jpg" />
                <?php } ?>

                <div class="thumbnail-wrap">

                     <?php //var_dump($image_gallery); 
                     if ( $image_gallery ) {
                        foreach( $image_gallery as $image ) {
                            $image_url = $image['sizes']['thumbnail']; ?>
                            <div class="img-wrap img-wrap-bg">
                                <a href="<?php echo $image['sizes']['large']; ?>" rel="lightbox">
                                    <img src="<?php echo $image_url; ?>" />
                                </a>
                            </div>
                            <?php }
                        } ?>

                    </div>

                </div>

                <?php if ( ! $protections ) { //var_dump($protections);
                    $protection_class = 'no-protections';
                } else {
                    $protection_class = '';
                } ?>

                <div class="cell large-7 description-features-wrap grid-x <?php echo $protection_class; ?>">

                    <?php if (is_user_logged_in() && $wholesale_price && $retail_price ) { 
                        if ( current_user_can('edit_posts')) {
                            $price_name = 'Wholesaler';
                            $price_value = number_format($wholesale_price, 2);

                        } else {
                            $price_name = 'Retailer';
                            $price_value = number_format($retail_price, 2);
                        }

                        ?>

                        <div class="price-wrap-outer">

                            <h4><?php echo $price_name; ?> Price</h4>

                            <div class="price-wrap">

                                $<?php echo $price_value; ?>

                            </div>
                            <div class="price-description">
                                Per Unit
                            </div>

                        </div>
                        <?php } ?>

                        <div class="accessory-description">
                            <h4>Description</h4>
                            <?php echo $description; ?>
                        </div>

                        <?php if ( $protections ) { ?>

                        <div class="protections-wrap cell medium-6">

                            <h4>Protections</h4>

                            <?php foreach( $protections as $protection ) {

                                if ( $protection == 'Overcharge Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/over-charge-protection'); ?>
                                    <span>Overcharge Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Over-Voltage Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/voltage-protection'); ?>
                                    <span>Over-Voltage Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Short Circuit Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/short-circuit-protection'); ?>
                                    <span>Short Circuit Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Over-Current Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/current-protection'); ?>
                                    <span>Over-Current Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Over-Heat Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/over-heat-protection'); ?>
                                    <span>Overheating Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Fail-Safe Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/fail-safe-protection'); ?>
                                    <span>Fail-Safe Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Anti-Scratch Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/anti-scratch-protection'); ?>
                                    <span>Anti-Scratch Protection</span>
                                </div>
                                <?php }


                                if ( $protection == 'Full 360 Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/360-protection'); ?>
                                    <span>Full 360° Protection</span>
                                </div>
                                <?php }


                                if ( $protection == 'Anti-Shock Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/anti-shock-protection'); ?>
                                    <span>Anti-Shock Protection</span>
                                </div>
                                <?php }

                                if ( $protection == 'Shock-Absorption Protection' ) { ?>

                                <div class="protection">
                                    <?php get_template_part('assets/svg/absorb-protection'); ?>
                                    <span>Shock-Absorption Protection</span>
                                </div>
                                <?php }
                            } ?>

                        </div>

                        <?php } ?>

                        <?php if ( $combined_features ) { ?>
                        <div class="features-section-wrap features-wrap cell medium-6">
                            <div class="features-section <?php echo $border_class; ?>">
                                <h4>Features</h4>
                                <ul>
                                    <?php foreach( $combined_features as $feature ) { ?>
                                    <li>
                                        <?php get_template_part('assets/svg/icon-square'); ?>
                                        <?php echo $feature; ?>
                                        
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <?php } ?>


                        <div class="features-section-wrap benefits-wrap cell medium-6">
                            <div class="benefits features-section">
                                <h4>Benefits</h4>

                                <ul>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>Professional HQ Packaging</li>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>USA Supplier</li>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>Fiscal Stock</li>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>Low Prices</li>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>Quality Guaranteed</li>
                                    <li><?php get_template_part('assets/svg/icon-star'); ?>Fast Shipping</li>
                                </ul>
                            </div>
                        </div>

                        <?php if ( LV_LOGGED_IN_ID ) { ?>
                        <?php if ( $colors ) { ?>
                        <div class="features-section-wrap colors-wrap cell medium-6">
                            <div class="features-section colors">
                                <h4>Colors</h4>
                                <ul>
                                    <?php foreach( $colors as $color ) { ?>
                                    <li>
                                        <?php get_template_part('assets/svg/icon-circle'); ?>
                                        <?php echo $color; ?>    
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>

                    </div><!-- description features wrap -->

                    <?php if ( LV_LOGGED_IN_ID ) { ?>
                    <div class="order-button-wrap">
                        <form method="POST" action="#">
                            <input type="hidden" name="add-one-accessory" value="<?php the_ID(); ?>" />
                            <input type="hidden" name="product" value="<?php echo $post->post_name; ?>" />

                            <button type="submit" class="gs-button">Add To Cart</button>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div><!-- .entry-content -->

    </article><!-- #post-->
