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
            <li><a href="<?php echo home_url(''); ?>/events/">Events</a></li>
            <li><a href="<?php echo home_url(''); ?>/events/media/">Media</a></li>
            <li class="active"><a href="javascript:void()">Press</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="event-pp-report-page-sec">
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
                <?php echo do_shortcode( '[ajax_press_posts]' ); ?>
              </div>
              
            </div>
          </div>

          <div id="tab-2" class="fl-tab-content">
            <div class="event-pp-report-page-tab-con event-pp-report-page-tab-2-con">
              <div class="event-pp-report-page-tab-con-des">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
              <div class="event-pp-report-page-tab-2-grds">
                <?php echo do_shortcode( '[ajax_repress_posts]' ); ?>
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