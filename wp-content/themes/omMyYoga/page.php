<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="gym_about_section">
            <div class="container">
			<?php
if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
	// Include the featured content template.
	get_template_part( 'featured-content' );
}
?>
                <!-- <div class="row anand">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                        <div class="gym_about_img">
                            <img src="https://www.anandabodh.com/fronts/assets/images/about1/about1.jpg" alt="">
                        </div> 
                    </div>
                    </div> -->
                    <div class="row anand">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="gym_about_main">
                            <div class="gym_about_detail">
                               
							<?php
			// Start the Loop.
			while ( have_posts() ) :

				the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				endwhile;
			?>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
