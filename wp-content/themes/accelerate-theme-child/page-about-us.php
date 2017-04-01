<?php /* Template Name: About Template */

get_header(); ?>

<section class="home-page about-page">
	<div class="site-content">
        
    <?php while(have_posts()) : the_post();
        $heading = get_field('heading');
        $lead = get_field('lead');
        $about_image_1 = get_field('about_image_1');
        $about_image_2 = get_field('about_image_2');
        $about_image_3 = get_field('about_image_3');
        $about_image_4 = get_field('about_image_4');
        $size = "full";
        
        $about_title_1 = get_field('about_title_1');
        $about_title_2 = get_field('about_title_2');
        $about_title_3 = get_field('about_title_3');
        $about_title_4 = get_field('about_title_4');
        
        $about_description_1 = get_field('about_description_1');
        $about_description_2 = get_field('about_description_2');
        $about_description_3 = get_field('about_description_3');
        $about_description_4 = get_field('about_description_4');
        
        $cta_header = get_field('cta_header');
        $cta_button = get_field('cta_button');
    ?> 
        
    <div class='homepage-hero'>        
      <?php the_content();?>
    </div><!-- homepage-hero -->
        
</div><!-- .site-content -->
 </section><!-- .home-page .about-page --> 
        
  <div class="about-content">
    
    <h3 class="center-content"><?php echo $heading ?></h3>
    <p class="about-lead center-content"><?php echo $lead ?></p>
      
      <div class="about-services">
          <div class="service-image-left"><?php echo wp_get_attachment_image($about_image_1, $size); ?>
          </div> 
        <div class="service-right">
         <h2><?php echo $about_title_1 ?></h2>  
            <p><?php echo $about_description_1 ?></p>
        </div>
      </div> 
      
      <div class="about-services">
          <div class="service-image-right"><?php echo wp_get_attachment_image($about_image_2, $size); ?>
          </div> 
        <div class="service-left">
         <h2><?php echo $about_title_2 ?></h2>  
            <p><?php echo $about_description_2 ?></p>
        </div>
      </div> 
      
      <div class="about-services">
          <div class="service-image-left"><?php echo wp_get_attachment_image($about_image_3, $size); ?>
          </div> 
        <div class="service-right">
         <h2><?php echo $about_title_3 ?></h2>  
            <p><?php echo $about_description_3 ?></p>
        </div>
      </div> 
      
      <div class="about-services">
          <div class="service-image-right"><?php echo wp_get_attachment_image($about_image_4, $size); ?>
          </div> 
        <div class="service-left">
         <h2><?php echo $about_title_4 ?></h2>  
            <p><?php echo $about_description_4 ?></p>
        </div>
      </div>
      
      
       <?php endwhile; // end of the loop. ?>
        <?php wp_reset_query(); ?>
      
      <div id="about-cta">
    <h2><?php echo $cta_header ?></h2>
    <section >
       <a class="about-button button new-cta" href="../accelerate/contact-us"><?php echo $cta_button ?></a>
 
</section>
        
    </div>
      
  </div><!-- .about-content -->        

<?php get_footer(); ?>
        
   