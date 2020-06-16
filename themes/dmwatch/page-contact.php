<?php
/*
  Template Name: Contact Us
*/
get_header(); 
$thisID = get_the_ID();
$map = get_field('embedded_code', $thisID); 
?>
<section class="contact-google-map-wrp">
  <?php if( !empty($map) ) printf('%s', $map); ?>
</section>


<section class="dm-contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-contact-form-block">
          <?php 
            $intro = get_field('introsec', $thisID); 
            if( $intro ):
          ?>
          <div class="dm-contact-form-head">
          <?php 
            if( !empty($intro['title']) ) printf('<h1 class="dm-contact-form-head-title">%s</h1>', $intro['title'] );
            if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
          </div>
          <?php endif; ?>
          <?php 
            $forms = get_field('formsec', $thisID); 
          ?>
          <?php if( $forms ): $formtitle = $forms['titlesec']; ?>
          <div class="dm-contact-form-inr clearfix">
            <?php if(!empty($formtitle['title'])) printf('<p>%s</<p>', $formtitle['title']); ?>
            <div class="dm-contact-form-img-rgt">
              <?php if(!empty($forms['image'])): echo cbv_get_image_tag($forms['image'], 'contgrid'); endif;?>
            </div>
            
            <div class="dm-contact-form-lft">
              <div class="dm-contact-form-wrp clearfix">
                <div class="wpforms-container">
                  <?php if(!empty($formtitle['form_shortcode'])) echo do_shortcode( $formtitle['form_shortcode'] ); ?>
                </div>
              </div>
            </div>
            
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>