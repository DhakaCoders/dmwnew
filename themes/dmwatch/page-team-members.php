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

<section class="page-banner page-bnr-team-members designTwo" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des hasAnim">
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
$i = 1;
while( $tmQuery->have_posts() ): $tmQuery->the_post();
  $profile_image = get_field('profile_image');
  $full_name = get_field('full_name');
  $position = get_field('position');
  $aboutcont = get_field('description', get_the_ID());
?>
            <li>
              <div class="crkmts-grd-item">
                <a id="quickViewOpener" data-toggle="modal" data-target="#quickViewModal<?php echo $i; ?>" href="#" class="popup-btn"></a>
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
              <!-- Modal -->
              <div class="modal fade dm-modal-con-wrap" id="quickViewModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                      <i class="far fa-times-circle"></i>
                    </button>
                    <div class="info-popup-container">
                      <div class="info-popup-cntlr-inr clearfix">
                        <div class="info-popup-sidebar">
                          <div class="crkmts-grd-item">
                            <div class="itm-grd-img-bx">
                    <?php if( !empty($profile_image) ): echo cbv_get_image_tag( $profile_image ); else: ?>
                    <img src="<?php echo THEME_URI; ?>/assets/images/our-management-grd-img-bx-02.jpg">
                    <?php endif; ?>
                            </div>
                            <div class="itm-short-des">
                              <strong>
                                <?php 
                                  if( !empty($fullname) ) 
                                    printf('%s', $fullname);
                                  else
                                    printf('%s', get_the_title(get_the_ID()));
                                ?>
                              </strong>
                              <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
                            </div>
                          </div>
                          <?php $sinfo = get_field('socialinfo', get_the_ID()); ?>
                          <div class="popup-social">
                            <label>Social Media</label>
                            <?php if( !empty($sinfo) ): ?>
                            <ul class="reset-list">
                              <?php if( !empty($sinfo['linkedin_url']) ): ?>
                              <li><a target="_blank" href="<?php echo $sinfo['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a></li>
                              <?php endif; ?>
                              <?php if( !empty($sinfo['facebook_url']) ): ?>
                              <li><a target="_blank" href="<?php echo $sinfo['facebook_url']; ?>"><i class="fab fa-facebook"></i></a></li>
                              <?php endif; ?>
                              <?php if( !empty($sinfo['twitter_url']) ): ?>
                              <li><a target="_blank" href="<?php echo $sinfo['twitter_url']; ?>"><i class="fab fa-twitter"></i></a></li>
                              <?php endif; ?>
                              <?php if( !empty($sinfo['instagram_url']) ): ?>
                              <li><a target="_blank" href="<?php echo $sinfo['instagram_url']; ?>"><i class="fab fa-instagram"></i></a></li>
                              <?php endif; ?>
                            </ul>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="info-popup-des">
                          <?php if( !empty($aboutcont) ) echo wpautop( $aboutcont ); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
<?php $i++; endwhile; ?>            
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