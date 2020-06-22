<?php
get_header();
$thisID = get_the_ID();
while( have_posts() ): the_post();
	$fimgID = get_post_thumbnail_id();
	$imgsrc = cbv_get_image_src($fimgID);
	$bannerImgId = get_field('banner_image');
	$bannerImgSrc = cbv_get_image_src($bannerImgId);
	$banner_title = get_field('banner_title');
	$banner_description = get_field('banner_description');
  if( empty( $bannerImgSrc ) ) $bannerImgSrc = THEME_URI .'/assets/images/an-our-page-banner-bg.jpg';
  if( empty( $banner_title ) ) $banner_title = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
  if( empty( $banner_description ) ) $banner_description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
?>
<section class="dm-prarpip-banner-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-prarpip-banner-sec-inr">
          <span>Blog | <?php echo get_the_date('M d, Y'); ?></span>
          <h1 class="dm-prarpip-banner-sec-title"><?php the_title(); ?></h1>
          <?php if( !empty( $bannerImgSrc ) ): ?>
          <div class="dm-prarpip-banner-img inline-bg" style="background: url('<?php echo $bannerImgSrc; ?>');">
          </div>
          <div class="dm-prarpip-banner-des">
          	<?php 
          	if( !empty( $banner_title ) ) printf('<h2 class="dm-prarpip-banner-des-title">%s</h2>', $banner_title);
          	echo wpautop( $banner_description );
          	?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="dm-prarpip-des-sec">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-prarpip-des-sec-inr">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
endwhile;

get_template_part('templates/footer', 'top');
get_footer(); 
?>