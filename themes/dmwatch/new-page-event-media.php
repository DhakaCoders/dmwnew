<?php 
/*
  Template Name: Events - Media
*/
get_header();
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-event-media.jpg';


$bcontent = get_field('description', $thisID);
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event-media" style="overflow: hidden;">
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
            <li><a href="<?php echo home_url(''); ?>/events/">Events</a></li>
            <li class="active"><a href="javascript:void()">Media</a></li>
            <li><a href="<?php echo home_url(''); ?>/events/press/">Press</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-bg-gray event-media-page-tab-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
            <button class="tab-link current" data-tab="tab-1">News</button>
            <button class="tab-link" data-tab="tab-2">Oped (media)</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="event-media-page-tab-con">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="event-media-page-tab-con-inr">
          <div id="tab-1" class="fl-tab-content current">
            <div class="event-media-page-tab-con-cntlr emptc-tab-1-cntlr">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'news',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'news_cat',
                          'field'    => 'slug',
                          'terms'    => 'news',
                          ),
                    ),
                  ) 
                );
                if($ucquery->have_posts()):
              ?>
              <ul class="clearfix reset-list">
                <?php 
                 while($ucquery->have_posts()): $ucquery->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id);
                  else
                    $event_src = ''; 
                  $ninfo = get_field('news_info');  
                ?>
                <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <?php echo cbv_get_image_tag($attach_id); ?>
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <span><?php echo $ninfo; ?></span>
                      <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Continue Reading...</a> </p>
                    </div>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
          <div id="tab-2" class="fl-tab-content">
            <div class="event-media-page-tab-con-cntlr emptc-tab-2-cntlr">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'news',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'news_cat',
                          'field'    => 'slug',
                          'terms'    => 'news',
                          ),
                    ),
                  ) 
                );
                if($ucquery->have_posts()):
              ?>
<ul class="clearfix reset-list">
                <?php 
                 while($ucquery->have_posts()): $ucquery->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id);
                  else
                    $event_src = ''; 
                  $ninfo = get_field('news_info');  
                ?>
  <li>
    <div class="event-media-page-tab-con-row clearfix">
      <div class="event-media-page-tab-con-fea-img">
        <?php echo cbv_get_image_tag($attach_id); ?>
      </div>
      <div class="event-media-page-tab-con-des">
        <h3 class="emptcd-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <span><?php echo $ninfo; ?></span>
        <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Continue Reading...</a> </p>
      </div>
    </div>
  </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
            </div>
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