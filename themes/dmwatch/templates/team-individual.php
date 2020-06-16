<?php 
$cterm = get_queried_object();
?>
<section class="rs-mangmnt-tm-sec sec-bg-gray individual-team-mambers-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="management-sec-hdr">
          <h2 class="mngs-hdr-title">
            OUR <?php printf('%s', $cterm->name); ?> <span>TEAM</span>
          </h2>
          <?php if( !empty($cterm->description) ) echo wpautop($cterm->description); ?>
        </div>
      </div>

      <?php 
      $query = new WP_Query(array( 
          'post_type'=> 'teams',
          'post_status' => 'publish',
          'posts_per_page' =>-1,
          'orderby' => 'date',
          'order'=> 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'team_department',
              'field' => 'term_id',
              'terms' => $cterm->term_id
            )
          )
        ) 
      );
      if($query->have_posts()):
      ?>
      <div class="col-md-12">
        <div class="individual-team-mambers-grd-cntlr">
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
              <div class="crkmts-grd-item">
                <a id="quickViewOpener" data-toggle="modal" data-target="#quickViewModal<?php echo $i; ?>" href="#" class="popup-btn"></a>
                <div class="itm-grd-img-bx">
                  <?php if(!empty( $profileimage )): echo cbv_get_image_tag( $profileimage ); endif;?>
                </div>
                <div class="itm-short-des mHc">
                  <strong><?php the_title( );?></strong>
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
        </div>
      </div>
    <?php endif;  wp_reset_postdata(); ?>
    </div>
  </div>
</section>