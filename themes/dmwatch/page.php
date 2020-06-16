<?php 
get_header();
while ( have_posts() ) :
  the_post();

$thisID = get_the_ID();
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-blog-details.jpg';

$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$description = get_field('description', $thisID);
?>
<section class="page-banner page-bnr-blog-details" style="overflow: hidden;">
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

<div class="dm-bd-grd-sec-ctlr">
  <section class="dm-bd-grd-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dm-bd-grd-sec-inr">
            <div class="dm-page-grd-item-des">
              <?php if( !empty($description) ) echo wpautop( $description ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<?php 
endwhile;
get_template_part('templates/footer', 'top');
get_footer(); 
?>