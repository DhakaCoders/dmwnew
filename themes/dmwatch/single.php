<?php 
get_header();
while ( have_posts() ) :
  the_post();
  $categories = get_the_terms( get_the_ID(), 'category' );
  $term_name = '';
  if ( ! empty( $categories ) ) {
      foreach( $categories as $category ) {
         $term_name = ' | '.$category->name; 
      }
  }

$thisID = get_option( 'page_for_posts' );
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-blog-details.jpg';
?>
<section class="page-banner page-bnr-blog-details" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="dm-blog-details-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-blog-details-des-sec-inr">
          <h1 class="dm-bd-des-title"><?php the_title(); ?></h1>
          <strong><?php echo get_the_date('M d, Y'); ?><?php echo $term_name; ?></strong>
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="dm-bd-grd-sec-ctlr">
  <section class="dm-bd-grd-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dm-bd-grd-sec-inr">
            <div class="dm-bd-grd-item-des">
              <?php the_content(); ?>
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