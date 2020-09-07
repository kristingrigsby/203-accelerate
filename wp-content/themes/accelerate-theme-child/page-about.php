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

$size = "full";
get_header(); ?>
    <div class="about-intro">
            <h2>Accelerate is a strategy and marketing agency
                located in the heart of NYC. Our goal is to build businesses by making 
                our clients visible and making their clients smile.
            </h2>
            </div>       
    <div id="primary" class="about-page hero-content">
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
    </div>
    <div id="secondary">        
            <section class="about-us">
			    <div class="site-content">
                    <ul class="about-sections">
                        <li id="about_1">
                            <div class="individual-about" style="order: 2">
                                <h4><?php echo $about_1; ?></h4>
                                <p><?php echo $about_1_description; ?></p>
                            </div>
                            <div class="individual-figure" style="order: 1">
                                <figure>
                                    <?php echo wp_get_attachment_image($image_1,$size); ?>
                                </figure>	
                            </div>
                        </li>
                        <li id="about_2">
                            <div class="individual-about" style="order: 1">
                                <h4><?php echo $about_2; ?></h4>
                                <p><?php echo $about_2_description; ?></p>
                            </div>
                            <div class="individual-figure" style="order: 2">
                                <figure>
                                    <?php echo wp_get_attachment_image($image_2,$size); ?>
                                </figure>	
                            </div>
                        </li>
                        <li id="about_3">
                            <div class="individual-about" style="order: 2">
                                <h4><?php echo $about_3; ?></h4>
                                <p><?php echo $about_3_description; ?></p>
                            </div>
                            <div class="individual-figure" style="order: 1">
                                <figure>
                                    <?php echo wp_get_attachment_image($image_3,$size); ?>
                                </figure>	
                            </div>    
                        </li>
                        <li id="about_4">
                            <div class="individual-about" style="order: 1">
                                <h4><?php echo $about_4; ?></h4>
                                <p><?php echo $about_4_description; ?></p>
                            </div>
                            <div class="individual-figure" style="order: 2">
                                <figure>
                                    <?php echo wp_get_attachment_image($image_4,$size); ?>
                                </figure>	
                            </div>
                        </li>
                    </ul>   
                </div>
            </section>   
            <?php endwhile; // end of the loop. ?>
        </div>    
        <div class="contact-us site-content">
                <div class="half-width">
                    <h3>Interested in working with us?</h3>
                </div>
                <div class="half-width">
                    <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
                </div>
        </div>

<?php get_footer(); ?>