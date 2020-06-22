<?php 
  $spacialArry = array(".", "/", "+", " ", ")", "(", "-");$replaceArray = '';
  $contact = get_field('contactinfo', 'options');
  $address = $contact['address'];
  $gmapsurl = $contact['gmap_url'];
  $email = $contact['email_address'];
  $show_telefoon = $contact['telephone'];
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));

  $logoObj = get_field('logo_footer', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $sinfo = get_field('sociale_media', 'options');
  $ftdescription = get_field('ftdescription', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-inner clearfix">
          <div class="ftr-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
            <div class="ftr-des">
              <?php 
              if( !empty($ftdescription) ) echo wpautop($ftdescription);
              ?>
            </div>
          </div>
          <div class="ftr-menu">
            <div class="ftr-menu-inr">
              <h4 class="ftr-menu-title"><?php _e( 'About us', THEME_NAME ); ?></h4>
              <?php 
                $menuOptionsb = array( 
                    'theme_location' => 'cbv_ft_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $menuOptionsb ); 
              ?>  
            </div>
          </div>
          <div class="ftr-cnt-menu">
            <div class="ftr-cnt-menu-inr">
              <h4 class="ftr-cnt-menu-title"><?php _e( 'Connect', THEME_NAME ); ?></h4>
              <ul class="reset-list">
                <?php if( !empty($address) ) printf('<li><a href="%s">%s</a></li>', $gmaplink, $address); ?>
                <?php if( !empty($email) ) printf('<li><a href="mailto:%s">%s</a></li>', $email, $email); ?>
                <?php if( !empty($show_telefoon) ) printf('<li><a href="tel:%s">%s</a></li>', $telefoon, $show_telefoon); ?>
              </ul>
            </div>
          </div>
          <div class="ftr-facebook">
            <div class="ftr-facebook-inr">
              <div class="ftr-cnt-socials-media">
                <?php if( !empty($sinfo) ): ?>
                <ul class="reset-list">
                  <?php if( !empty($sinfo['linkedin_url']) ): ?>
                  <li class="linkedin"><a title="LinkedIn" href="<?php echo $sinfo['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a></li>
                  <?php endif; ?>
                  <?php if( !empty($sinfo['facebook_url']) ): ?>
                  <li class="facebook"><a title="Facebook" href="<?php echo $sinfo['facebook_url']; ?>"><i class="fab fa-facebook"></i></a></li>
                  <?php endif; ?>
                  <?php if( !empty($sinfo['twitter_url']) ): ?>
                  <li class="twitter"><a title="Twitter" href="<?php echo $sinfo['twitter_url']; ?>"><i class="fab fa-twitter"></i></a></li>
                  <?php endif; ?>
                  <?php if( !empty($sinfo['instagram_url']) ): ?>
                  <li class="instagram"><a title="Instagram" href="<?php echo $sinfo['instagram_url']; ?>"><i class="fab fa-instagram"></i></a></li>
                  <?php endif; ?>
                  <?php if( !empty($sinfo['instagram_url']) ): ?>
                  <li class="youtube"><a title="Youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                  <?php endif; ?>
                  <?php if( !empty($sinfo['instagram_url']) ): ?>
                  <li class="email"><a title="E-Mail" href="#"><i class="fas fa-envelope"></i></a></li>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>
              </div>
              <div class="ftr-fb-area">
                <img src="<?php echo THEME_URI; ?>/assets/images/facebook-img.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-copywrite-sec clearfix">
          <div class="developed-by">
            
          </div>
          <div class="ftr-cpwrt">
            <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="ftr-msg-icon">
    <a href="mailto:"><img src="<?php echo THEME_URI; ?>/assets/images/msg-icon.png"></a>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>