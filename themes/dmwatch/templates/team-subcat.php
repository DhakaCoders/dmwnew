<?php 
$cterm = get_queried_object();
$child_terms = get_terms( array(
  'taxonomy' => 'team_department',
  'hide_empty' => false,
  'parent' => $cterm->term_id
) );

if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ){
?>
<section class="research-knwldg-mangmnt-tm-sec sec-bg-gray">
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
      <div class="col-md-12">
        <div class="crkmts-grd-cntlr">
          <ul class="reset-list clearfix">
            <?php foreach ( $child_terms as $chterm ) { ?>
            <li>
              <div class="crkmts-grd-item">
                <div class="crkmts-grd-img-bx">
                  <?php 
                    $image_id = get_field('logo', $chterm, false); 
                    if( !empty($image_id) ):
                      echo cbv_get_image_tag( $image_id );
                    else:
                  ?>
                  <img src="<?php echo THEME_URI; ?>/assets/images/crkmts-logo-01.jpg">
                  <?php endif; ?>
                  <a href="<?php echo esc_url( get_term_link( $chterm ) ); ?>" class="overlay-link"></a>
                  <div class="crkmts-grd-img-bx-hover">
                    <div>
                      <?php printf('<strong>%s</strong>', $chterm->name); ?>
                    </div>
                  </div>
                </div>
                <?php printf('<strong class="crkmts-grd-item-title mHc">%s</strong>', $chterm->name); ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>