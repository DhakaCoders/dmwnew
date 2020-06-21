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

<section class="rs-mangmnt-tm-sec sec-bg-gray individual-team-mambers-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="management-sec-hdr">
      <?php 
        $terms = get_terms( array(
          'taxonomy' => 'team_department',
          'hide_empty' => false,
          'parent' => 0
      ) );
      ?>
          <p><a class="active" href="#">All</a>
            <?php foreach ( $terms as $term ) { ?>
            / <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a> 
            <?php } ?>
            </p>
        </div>
      </div>
      <div class="col-md-12">
<?php 
$tmQuery = new WP_Query(array(
  'post_type' => 'teams',
  'posts_per_page' => 9,
));
if( $tmQuery->have_posts() ): 
?>
        <div class="individual-team-mambers-grd-cntlr">
          <ul class="reset-list clearfix">
<?php 
while( $tmQuery->have_posts() ): $tmQuery->the_post();
  $profile_image = get_field('profile_image');
  $full_name = get_field('full_name');
  $position = get_field('position');
?>
            <li>
              <div class="crkmts-grd-item">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <div class="itm-grd-img-bx">
                  <?php  
                    if( !empty($profile_image) ):
                      echo cbv_get_image_tag( $profile_image );
                    else:
                  ?>
                  <img src="<?php echo THEME_URI; ?>/assets/images/our-management-grd-img-bx-02.jpg">
                  <?php endif; ?>
                </div>
                <div class="itm-short-des mHc">
                <?php 
                  if( !empty($fullname) ) 
                    printf('<strong>%s</strong>', $fullname);
                  else
                    printf('<strong>%s</strong>', get_the_title(get_the_ID()));
                ?>
                  <span><?php echo $position; ?></span>
                </div>
              </div>
            </li>
<?php endwhile; ?>            
          </ul>
        </div>
<?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>