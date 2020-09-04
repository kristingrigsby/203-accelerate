<?php
/**
 * The template for displaying About page
 *
 * This is the template that displays About page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>
            
    <div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $about_1 = get_field('about_1');
                $about_1_description = get_field('about_1_description');
                $image_1 = get_field('image_1');
                $about_2 = get_field('about_2');
                $about_2_description = get_field('about_2_description');
                $image_2 = get_field('image_2');
                $about_3 = get_field('about_3');
                $about_3_description = get_field('about_3_description');
                $image_3 = get_field('image_3');
                $about_4 = get_field('about_4');
                $about_4_description = get_field('about_4_description');
                $image_4 = get_field('image_4');
            ?>
            <?php the_content(); ?>
            <section class="about-us">
			    <div class="site-content">
                    <ul class="about-sections">
                        <li id="about_1">
                            <h4><?php echo $about_1; ?></h4>
                            <h4><?php echo $about_1_description; ?></h4>
                            <figure>
                                <?php echo wp_get_attachment_image($image_1); ?>
                            </figure>	
                        </li>
                        <li id="about_2">
                        <h4><?php echo $about_2; ?></h4>
                            <h4><?php echo $about_2_description; ?></h4>
                            <figure>
                                <?php echo wp_get_attachment_image($image_2); ?>
                            </figure>	
                        </li>
                        <li id="about_3">
                        <h4><?php echo $about_3; ?></h4>
                            <h4><?php echo $about_3_description; ?></h4>
                            <figure>
                                <?php echo wp_get_attachment_image($image_3); ?>
                            </figure>	
                        </li>
                        <li id="about_4">
                        <h4><?php echo $about_4; ?></h4>
                            <h4><?php echo $about_4_description; ?></h4>
                            <figure>
                                <?php echo wp_get_attachment_image($image_4); ?>
                            </figure>	
                        </li>
                    </ul>   
                </div>
            </section>   
			<?php endwhile; // end of the loop. ?>
            <section class="contact-us">
                <h3>Interested in working with us?</h3>
                <input id="button" class="form-buttom" type="button" value="submit">
            </section>
    </div><!-- #primary -->

<?php get_footer(); ?>