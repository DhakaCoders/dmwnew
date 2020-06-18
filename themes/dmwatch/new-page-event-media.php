<?php 
/*
  Template Name: Events - Media
*/
get_header();
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event-media" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/page-bnr-event-media.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">NEWS</h1>
          <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial<br> for survival of people and the planet. </p>
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
            <li><a href="/events/">Events</a></li>
            <li class="active"><a href="#">Media</a></li>
            <li><a href="/events/press">Press</a></li>
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
              <?php echo do_shortcode( '[ajax_news_posts]' ); ?>
            </div>
          </div>
          <div id="tab-2" class="fl-tab-content">
            <div class="event-media-page-tab-con-cntlr emptc-tab-2-cntlr">
              <?php echo do_shortcode( '[ajax_media_posts]' ); ?>
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