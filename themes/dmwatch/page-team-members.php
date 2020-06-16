<?php
/*
  Template Name: Team Members
*/
get_header(); 
$thisID = get_the_ID();

$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-team-members.jpg';

$description = get_field('description', $thisID);
?>

<section class="page-banner page-bnr-team-members" style="overflow: hidden;">
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


<section class="rs-mangmnt-tm-sec sec-bg-gray team-mambers-page-sec">
  <div class="container">
    <div class="row">
      <?php if( !empty($description) ): ?>
      <div class="col-md-12">
        <div class="management-sec-hdr">
          <?php echo wpautop( $description ); ?>
        </div>
      </div>
      <?php endif; ?>
      <?php 
        $terms = get_terms( array(
          'taxonomy' => 'team_department',
          'hide_empty' => false,
          'parent' => 0
      ) );
      ?>
      <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
      <div class="col-md-12">
        <div class="crkmts-grd-cntlr">
          <ul class="reset-list">
            <?php foreach ( $terms as $term ) { ?>
            <li>
              <div class="crkmts-grd-item">
                <div class="crkmts-grd-img-bx">
                  <?php 
                    $image_id = get_field('logo', $term, false); 
                    if( !empty($image_id) ):
                      echo cbv_get_image_tag( $image_id );
                    else:
                  ?>
                  <img src="<?php echo THEME_URI; ?>/assets/images/crkmts-logo-01.jpg">
                  <?php endif; ?>
                  <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="overlay-link"></a>
                  <div class="crkmts-grd-img-bx-hover">
                    <div>
                    <?php printf('<strong>%s</strong>', $term->name); ?>
                    </div>
                  </div>
                </div>
                <?php printf('<strong class="crkmts-grd-item-title mHc">%s</strong>', $term->name); ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>