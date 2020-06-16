<?php
get_header(); 
$thisID = 306;

$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-advisor.jpg';


$description = get_field('description', $thisID);
?>
<section class="page-banner page-bnr-rgt-con bnr-txt-shadow-remove page-bnr-advisor" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="dm-advisor-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-advisor-grd-sec-inr">
          <?php if( !empty($description) ): ?>
          <div class="dm-advisor-grd-sec-des">
            <?php echo wpautop( $description );?>
          </div>
          <?php endif; ?>
          <h2 class="dm-advisor-grd-sec-title">MEMBERS OF THE BOARD</h2>
        <?php 
        $query = new WP_Query(array( 
            'post_type'=> 'advisor',
            'post_status' => 'publish',
            'posts_per_page' =>-1,
            'orderby' => 'date',
            'order'=> 'ASC'
          ) 
        );
        if($query->have_posts()):
        ?>
          <div class="dm-advisor-grd-item-wrap">
            <ul class="reset-list clearfix">
            <?php 
            while($query->have_posts()): $query->the_post();   
             $aimgid = get_field('profile_image', get_the_ID()); 
             $position = get_field('position', get_the_ID()); 
            ?>
              <li>
                <div class="dm-advisor-grd-item">
                  <div class="dm-advisor-grd-item-img-ctlr">
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                    <div class="dm-advisor-grd-item-img">
                    <?php  
                      if( !empty($aimgid) ):
                        echo cbv_get_image_tag( $aimgid );
                      else:
                    ?>
                    <img src="<?php echo THEME_URI; ?>/assets/images/dm-advisor-grd-item.jpg">
                    <?php endif; ?>
                    </div>
                  </div>
                  <div class="dm-advisor-grd-item-des mHc">
                    <h5 class="dm-advisor-grd-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
                    <a href="<?php the_permalink(); ?>">
                    View Full Biography
                    <i></i>
                    </a>
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
  </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>