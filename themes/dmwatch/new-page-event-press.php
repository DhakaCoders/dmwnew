<?php 
/*
  Template Name: Event - Press
*/
get_header();
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-event-pp-report.jpg';


$bcontent = get_field('description', $thisID);
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event-pp-report" style="overflow: hidden;">
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
            <li><a href="<?php echo home_url(''); ?>/events/media/">Media</a></li>
            <li class="active"><a href="javascript:void()">Press</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-bg-gray event-pp-report-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>Press release </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Report</span></button>
        </div>
      </div>
      <div class="col-md-12">
        <div class="event-pp-report-page-tab-con-cntlr">
          <div id="tab-1" class="fl-tab-content current">
            <div class="event-pp-report-page-tab-con event-pp-report-page-tab-1-con">
              <div class="event-pp-report-page-tab-con-des">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
              <div class="event-pp-report-page-tab-1-grds">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'press',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'presstype',
                          'field'    => 'slug',
                          'terms'    => 'press-release',
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
                    <div class="event-pp-report-page-tab-1-grd">
                      <div class="epprpt-grd-fea-img">
                        <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        <div class="inline-bg" style="background: url(<?php echo $event_src; ?>"></div>
                      </div>
                      <div class="mhc epprpt-grd-des">
                        <span><?php echo get_the_date('M d, Y'); ?></span>
                        <h4 class="epprpt-grd-des-title"><a href="#"><?php the_title(); ?></a></h4>
                        <p><?php echo $ninfo; ?></p>
                        <a href="<?php the_permalink(); ?>">View Full <i></i></a>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
                <div class="fl-see-all-btn" style="display: none;">
                  <a href="#">SEE ALL</a>
                </div>
              </div>
              
            </div>
          </div>

          <div id="tab-2" class="fl-tab-content">
            <div class="event-pp-report-page-tab-con event-pp-report-page-tab-2-con">
              <div class="event-pp-report-page-tab-con-des">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
              <div class="event-pp-report-page-tab-2-grds">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'press',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'presstype',
                          'field'    => 'slug',
                          'terms'    => 'report',
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
                    <div class="event-pp-report-page-tab-2-grd">
                      <div class="epprpt2-grd-fea-img">
                        <div class="inline-bg" style="background: url(<?php echo $event_src; ?>">
                          <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        </div>
                      </div>
                      <div class="epprpt2-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <strong><?php echo $ninfo; ?></strong>
                        <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Continue Reading.</a></p>
                      </div>
                    </div>
                  </li>
<?php endwhile; ?>
                </ul>
              <?php endif; ?>
                <div class="fl-see-all-btn" style="display: none;">
                  <a href="#">SEE ALL</a>
                </div>
              </div>
              
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