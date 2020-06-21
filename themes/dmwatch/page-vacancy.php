<?php
/*
  Template Name: Vacancy
*/
get_header(); 
$thisID = get_the_ID();

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-vacancy.jpg';

$intro = get_field('introsec', $thisID);
?>
<section class="page-banner page-bnr-vacancy" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
      <img src="<?php echo $standaardbanner; ?>" alt="banner">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">

      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<section class="dm-vacancy-grid-sec-wrp">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
        <?php if( !empty($intro) ): ?>
         <div class="dm-vacancy-grid-head">
          <?php 
            if( !empty($intro['title']) ) printf('<h1 class="dm-vacancy-grid-head-title">%s</h1>', $intro['title'] );
            if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
         </div>
        <?php endif; ?>

        <?php 
        $query = new WP_Query(array( 
            'post_type'=> 'vacancy',
            'post_status' => 'publish',
            'posts_per_page' =>-1,
            'orderby' => 'date',
            'order'=> 'ASC'
          ) 
        );
        if($query->have_posts()):
        ?>
         <div class="dm-vacancy-grid-wrp">
           <ul class="reset-list clearfix">
            <?php 
            while($query->have_posts()): $query->the_post();   
             $vimgid = get_field('image', get_the_ID()); 
             $jobinfo = get_field('jobinfo', get_the_ID());
            ?>
             <li>
               <div class="dm-vacancy-grid-inr">
                 <div class="dm-vacancy-grid-img-contrl">
                    <a href="<?php the_permalink();?>" class="overlay-link"></a>
                   <div class="dm-vacancy-grid-img">
                    <?php  
                      if( !empty($vimgid) ):
                        echo cbv_get_image_tag( $vimgid );
                      else:
                    ?>
                    <img src="<?php echo THEME_URI; ?>/assets/images/dm-vacancy-grid-img.png">
                    <?php endif; ?>
                   </div>
                 </div>
                 <div class="dm-vacancy-grid-dsc mHc">
                   <h4 class="dm-vacancy-grid-dsc-title"><?php the_title(); ?></h4>
                   <?php
                      if( !empty($jobinfo['job_location']) ) printf('<span>JOB LOCATION: %s</span>', $jobinfo['job_location']);
                      if( !empty($jobinfo['application_deadline']) ) printf('<span>DEADLINE: %s</span>', $jobinfo['application_deadline']);
                   ?>
                   <a href="<?php the_permalink();?>">READ MORE</a>
                 </div>
               </div>
             </li>
             <?php endwhile; ?>
           </ul>
         </div>
         <?php endif;  wp_reset_postdata(); ?>
       </div>
     </div>
   </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>