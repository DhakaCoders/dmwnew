<?php
/*
  Template Name: Participate Us
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-participate-with-us.jpg';

$bcontent = get_field('bcontent', $thisID);
?>
<section class="page-banner page-bnr-lft-con page-bnr-participate-with-us" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <?php if( !empty($bcontent) ): if( !empty($bcontent['description']) ) echo wpautop( $bcontent['description'] ); endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->



<?php 
$intro = get_field('introsec', $thisID); 
if( $intro ):
?>
<section class="dm-us-contact-form-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-us-contact-form-cntrl">
          <div class="dm-contact-form-head">
          <?php 
            if( !empty($intro['title']) ) printf('<h2 class="dm-contact-form-head-title">%s</h2>', $intro['title'] );
            if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
          </div>
          <div class="dm-us-contact-form-wrp clearfix">
            <div class="wpforms-container">
              <?php if(!empty($intro['formshortcode'])) echo do_shortcode( $intro['formshortcode'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>