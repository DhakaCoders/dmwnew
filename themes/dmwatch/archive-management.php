<?php
get_header(); 
$thisID = 330;
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-our-management.jpg';

$description = get_field('description', $thisID);
?>
<section class="page-banner page-bnr-lft-con page-bnr-our-management" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <?php if( !empty($description) ) echo wpautop( $description );?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<?php 
$query = new WP_Query(array( 
    'post_type'=> 'management',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order'=> 'ASC'
  ) 
);
if($query->have_posts()):
?>
<section class="rs-mangmnt-tm-sec sec-bg-gray our-management-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-management-grd-cntlr">
          <ul class="reset-list clearfix">
            <?php 
            while($query->have_posts()): $query->the_post();   
             $mimgid = get_field('profile_image', get_the_ID()); 
             $position = get_field('position', get_the_ID()); 
             $fullname = get_field('full_name', $thisID); 
            ?>
            <li>
              <div class="our-management-grd-item">
                <div class="our-management-grd-img-bx">
                  <?php  
                    if( !empty($mimgid) ):
                      echo cbv_get_image_tag( $mimgid );
                    else:
                  ?>
                  <img src="<?php echo THEME_URI; ?>/assets/images/our-management-grd-img-bx-02.jpg">
                  <?php endif; ?>
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                </div>
                <div class="our-management-short-des">
                <?php 
                  if( !empty($fullname) ) 
                    printf('<strong>%s</strong>', $fullname);
                  else
                    printf('<strong>%s</strong>', get_the_title($thisID));
                ?>
                <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;  wp_reset_postdata(); ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>