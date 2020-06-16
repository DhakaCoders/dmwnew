<?php
/*
  Template Name: Practice Areas
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/page-bnr-practice-areas.jpg';

$intro = get_field('introsec', $thisID);
?>
<section class="page-banner page-bnr-rgt-con page-bnr-title-semi page-bnr-practice-areas" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <?php if( $intro ): ?>
      <div class="page-bnr-top-logo">
        <?php 
          if( !empty($intro['logo']) ):
            echo cbv_get_image_tag($intro['logo']);
          endif;
        ?>
      </div>
      <?php endif; ?>
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->
<?php if( $intro ): ?>
<section class="dm-we-do-content-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-we-do-dsc-wrp">
          <div class="dm-we-do-dsc">
          <?php 
            if( !empty($intro['title']) ) printf('<h2 class="dm-we-do-dsc-title">%s</h2>', $intro['title'] );
            if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
  $showhidestatus = get_field('showhidestatus', $thisID);
  if( $showhidestatus ):
    $pstatus = get_field('projectstatus', $thisID);
    if( $pstatus ):
     $status = $pstatus['pstatus'];
?>
<section class="dm-pa-counter-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-pa-counter-cntlr">
        <?php if( !empty($pstatus['title']) ) printf('<h3 class="dm-pa-counter-title">%s</h3>', $pstatus['title'] ); ?>
          <ul class="reset-list">
            <li>
              <div class="dm-pa-counter-item">
                 <?php 
                   if( !empty($status['value1']) ) printf('<strong class="counter">%s</strong>', $status['value1'] ); 
                   if( !empty($status['title1']) ) printf('<span>%s</span>', $status['title1'] ); 
                 ?>
              </div>
            </li>
            <li>
              <div class="dm-pa-counter-item">
               <?php 
                 if( !empty($status['value2']) ) printf('<strong class="counter">%s</strong>', $status['value2'] ); 
                 if( !empty($status['title2']) ) printf('<span>%s</span>', $status['title2'] ); 
               ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>



<section class="hm-fea-services-sec hm-fea-services-sec-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-sec-hdr">
          <h2 class="hmfsshdr-title">Featured Service</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-cntlr">
          <div class="hm-fea-services hmFeaServicesSlider">
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-001.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc" style="color: #ED1C24">Public Health</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-002.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc" style="color: #03AED9">Governance</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-003.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc" style="color: #006838">Environment</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-004.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc" style="color: #FC8300">Hazard</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-005.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc" style="color: #3D5680">Agriculture</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>    
</section>

<section class="dm-featured-project-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-featured-project-sec-hdr">
          <h2 class="dmfpshdr-title">Featured Project</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="dm-featured-project-tabs">
          <div class="fl-tabs clearfix fl-tabs-2">
            <button class="tab-link" data-tab="tab-1"><span>Ongoing Projects </span></button>
            <button class="tab-link current" data-tab="tab-2"><span>Completed Projects</span></button>
          </div>
        </div>
        <div class="dm-featured-project-tabs-con-cntlr">
          <div id="tab-1" class="fl-tab-content">
            <div class="dm-featured-project-tabs-con">
              <div class="filter-results-grd-cntlr">
                <ul class="clearfix reset-list">
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg);">
                          <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-02.jpg);">
                          <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-02.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-03.jpg);">
                          <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-03.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="tab-2" class="fl-tab-content current">
            <div class="dm-featured-project-tabs-con">
              <div class="filter-results-grd-cntlr">
                <ul class="clearfix reset-list">
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-04.jpg);">
                          <img src="assets/images/filter-results-img-04.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-05.jpg);">
                          <img src="assets/images/filter-results-img-05.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="#" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-06.jpg);">
                          <img src="assets/images/filter-results-img-06.jpg">
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong>THE LIVELIHOODS AND
                            MARKET/VALUE CHAIN
                            ASSESSMENT <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  $showhideex = get_field('showhideex', $thisID);
  if( $showhideex ):
    $expertp = get_field('expertperson', $thisID);
    if( $expertp ):
?>
<section class="dm-pa-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-pa-grid-wrp">
          <?php if( !empty($expertp['title']) ) printf('<h2 class="dm-pa-grid-head-title">%s</h2>', $expertp['title'] ); ?>
          <?php 
            $teamIDS = $expertp['select_members'];
            if( !empty($teamIDS) ){
              $count = count($teamIDS);
              $query = new WP_Query(array( 
              'post_type'=> 'teams',
              'post_status' => 'publish',
              'posts_per_page'=> $count,
              'post__in' => $teamIDS
              ) 
            );
                  
            }else{
              $query = new WP_Query(array( 
              'post_type'=> 'teams',
              'post_status' => 'publish',
              'posts_per_page' => 4,
              'orderby' => 'date',
              'order'=> 'desc'
              ) 
            );
            }
          ?>
          <?php if( $query->have_posts() ):?>
          <ul class="reset-list clearfix">
            <?php 
              $i = 1;
              while($query->have_posts()): $query->the_post();
               $fullname = get_field('full_name', get_the_ID()); 
               $position = get_field('position', get_the_ID()); 
               $profileimage = get_field('profile_image', get_the_ID()); 
               $aboutcont = get_field('aboutcont', get_the_ID());
            ?>
            <li>
              <div class="dm-pa-grid-innr">
                <div class="dm-pa-grid-img-cntlr">
                  <div class="dm-pa-grid-img">
                    <?php if(!empty( $profileimage )): ?>
                      <?php echo cbv_get_image_tag( $profileimage ); ?>
                    <?php else: ?>
                    <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-grid-img.png">
                    <?php endif; ?>
                    <div class="dm-pa-grid-img-hover"></div>
                    <a id="quickViewOpener" data-toggle="modal" data-target="#quickViewModal<?php echo $i; ?>" href="#" class="popup-btn"></a>
                  </div>
                </div>
                <div class="dm-pa-grid-dsc">
                  <h4 class="dm-pa-grid-dsc-title"><?php the_title( );?></h4>
                  <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade dm-modal-con-wrap" id="quickViewModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><img src="<?php echo THEME_URI; ?>/assets/images/close-icon.jpg"></span>
                    </button>
                    <div class="info-popup-container">
                      <div class="info-popup-cntlr-inr clearfix">
                        <div class="info-popup-sidebar">
                          <div class="crkmts-grd-item">
                            <div class="itm-grd-img-bx">
                              <?php if(!empty( $profileimage )): echo cbv_get_image_tag( $profileimage ); endif;?>
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
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<section class="dm-pa-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-pa-service-sec-hdr">
          <h4>Practice areas »</h4>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="dm-pa-service-wrp">
          <ul class="clearfix reset-list">
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-1.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-2.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-3.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-4.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-5.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-6.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-7.png">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>