<?php
/**
 * Template Name: Accessories Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GS_Wireless
 */

get_header(); ?>

<div id="primary" class="content-area">

  <div class="max-width-wrap accessories-archive">

     <main id="main" class="site-main">

        <div class="cat_archive_wrap">

            <?php $custom_field_cats = get_field('categories','option'); 

            foreach( $custom_field_cats as $cat) { ?>

            <div class="cat_archive_item">

                <a href="<?php echo site_url() . '/products/' . $cat['url']; ?>">

                    <?php //var_dump( $cat['image']['sizes']['cats_image']); ?>

                    <img src="<?php echo $cat['image']['sizes']['cats_image']; ?>" />

                    <h3><?php echo $cat['title']; ?></h3>

                </a>

            </div>


            <?php } ?>

        </div>






    </main><!-- #main -->
</div>
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
