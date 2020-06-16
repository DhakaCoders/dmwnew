<?php
get_header(); 
$pageID = 330;
$standaardbanner = get_field('bannerimage', $pageID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-our-management-bio.jpg';

$thisID = get_the_ID();
?>

<section class="page-banner page-bnr-lft-con page-bnr-our-management-bio" style="overflow: hidden;">
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
<?php 
  $aimgid = get_field('profile_image', $thisID); 
  $position = get_field('position', $thisID); 
  $fullname = get_field('full_name', $thisID); 
  $yearsex = get_field('years_experience', $thisID); 
  $areasex = get_field('areas_expertise', $thisID); 
  $aboutcont = get_field('aboutcont', $thisID); 
?>
<section class="our-management-bio-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-management-bio-sec-cntlr">
          <div class="our-management-bio-top-con clearfix">
            <div class="our-management-bio-lft-sidebar">
              <div class="our-management-bio-pro-img">
                <span>
                  <?php  
                    if( !empty($aimgid) ):
                      echo cbv_get_image_tag( $aimgid );
                    else:
                  ?>
                  <img src="<?php echo THEME_URI; ?>/assets/images/our-management-grd-img-bx-02.jpg">
                  <?php endif; ?>
                </span>
              </div>
              <div class="bio-info hide-md">
                <div class="info-title">
                  <strong>INFO</strong>
                </div>
                <div class="bio-experience">
                  <strong>Years of Experience:</strong>
                  <?php if( !empty($yearsex) ) printf('<ul><li>%s</li></ul>', $yearsex); ?>
                  <strong>AREAS OF EXPERTISE:</strong>
                  <?php if( !empty($areasex) ) echo wpautop($areasex); ?>
                </div>
                <?php $sinfo = get_field('socialinfo', $thisID); ?>
                <div class="bio-connect">
                  <strong>CONNECT</strong>
                  <?php if( !empty($sinfo) ): ?>
                  <ul class="reset-list">
                    <?php if( !empty($sinfo['linkedin_url']) ): ?>
                    <li><a href="<?php echo $sinfo['linkedin_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/instagram.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['facebook_url']) ): ?>
                    <li><a href="<?php echo $sinfo['facebook_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/facebook.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['twitter_url']) ): ?>
                    <li><a href="<?php echo $sinfo['twitter_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/twitter.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['instagram_url']) ): ?>
                    <li><a href="<?php echo $sinfo['instagram_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/linkedin.png"></a></li>
                    <?php endif; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            
            <div class="our-management-bio-rgt-con">
              <div class="our-management-bio-name">
                <h1 class="our-management-bio-name-title">
                <?php 
                  if( !empty($fullname) ) 
                    printf('%s', $fullname);
                  else
                    printf('%s', get_the_title($thisID));
                ?>
              </h1>
                <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
              </div>
              <div>
                <?php if( !empty($aboutcont) ) echo wpautop( $aboutcont ); ?>
              </div>
            </div>
          </div>
          <div class="bio-info show-md">
                <div class="info-title">
                  <strong>INFO</strong>
                </div>
                <div class="bio-experience">
                  <strong>Years of Experience:</strong>
                  <?php if( !empty($yearsex) ) printf('<ul><li>%s</li></ul>', $yearsex); ?>
                  <strong>AREAS OF EXPERTISE:</strong>
                  <?php if( !empty($areasex) ) echo wpautop($areasex); ?>
                </div>
                <div class="bio-connect">
                  <strong>CONNECT</strong>
                  <?php if( !empty($sinfo) ): ?>
                  <ul class="reset-list">
                    <?php if( !empty($sinfo['linkedin_url']) ): ?>
                    <li><a href="<?php echo $sinfo['linkedin_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/instagram.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['facebook_url']) ): ?>
                    <li><a href="<?php echo $sinfo['facebook_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/facebook.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['twitter_url']) ): ?>
                    <li><a href="<?php echo $sinfo['twitter_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/twitter.png"></a></li>
                    <?php endif; ?>
                    <?php if( !empty($sinfo['instagram_url']) ): ?>
                    <li><a href="<?php echo $sinfo['instagram_url']; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/linkedin.png"></a></li>
                    <?php endif; ?>
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