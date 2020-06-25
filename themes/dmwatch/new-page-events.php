<?php 
/*
  Template Name: Events
*/
get_header();
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-event.jpg';


$bcontent = get_field('description', $thisID);
?>

<section class="page-banner designTwo dtRight" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <?php if( !empty($bcontent) ) echo wpautop($bcontent); ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="eventLinks">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="eventLinksstep1">
          <ul>
            <li class="active"><a href="javascript:void()">Events</a></li>
            <li><a href="<?php echo home_url(''); ?>/events/media/">Media</a></li>
            <li><a href="<?php echo home_url(''); ?>/events/press/">Press</a></li>
          </ul>  
        </div>
      </div>
    </div>
  </div>
</section>

<section class="event-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>Upcoming Events </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Past Event</span></button>
        </div>
      </div>

      <div class="col-md-12">
        <div class="event-page-sec-tab-con">
           <div id="tab-1" class="fl-tab-content current">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'event',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'event_cat',
                          'field'    => 'slug',
                          'terms'    => 'upcoming',
                          ),
                    ),
                  ) 
                );
                if($ucquery->have_posts()):
              ?>
              <div class="upcoming-event-con clearfix">
                <?php 
                 while($ucquery->have_posts()): $ucquery->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id,'bloggrid');
                  else
                    $event_src = '';   
                ?>
                <div class="upcoming-event-con-lft">
                  <div class="upcoming-event-fea-img inline-bg" style="background: url(<?php echo $event_src; ?>);">
                    <div class="upcoming-event-fea-img-hover-con">
                      <strong><?php echo get_the_date('M d, Y'); ?></strong> 
                      <p><?php the_title(); ?></p>
                      <div class="timer">
                        <img src="<?php echo THEME_URI; ?>/assets/images/timer.png">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="upcoming-event-con-rgt">
                  <strong><?php echo get_the_date('M d, Y'); ?></strong>
                  <h3 class="uec-title"><?php the_title(); ?></h3>
                  <?php echo wpautop(cbv_get_excerpt()); ?>
                </div>
                <?php endwhile; ?>
              </div>
              <?php endif;  wp_reset_postdata(); ?>
           </div>
          <div id="tab-2" class="fl-tab-content">
            <?php echo do_shortcode( '[ajax_event_posts]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>