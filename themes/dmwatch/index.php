<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-blog.jpg';


$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}
$bcontent = get_field('bcontent', $thisID);
?>
<section class="page-banner page-bnr-lft-con page-bnr-blog" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <?php if( !empty($bcontent) ) echo wpautop( $bcontent ); ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<?php 
$rblogP = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 1,
));
if( $rblogP->have_posts() ):
?>
<section class="Blogs-page-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="main-Blogs-sec-innr">
          <div class="main-Blogs-sec-hedding">
            <h2>Latest Post</h2>
          </div>
          <div class="main-Blogs-cntlr">
<?php 
while( $rblogP->have_posts() ): $rblogP->the_post();
?>
            <div class="main-Blogs-content">
              <div class="main-Blogs-content-img">
                <?php if( has_post_thumbnail() ): the_post_thumbnail(); else: ?>
                <img src="<?php echo THEME_URI; ?>/assets/images/blog-page-main-img-001.jpg" alt="">
                <?php endif; ?>
              </div>
              <div class="main-Blogs-content-desc">
                <div class="main-Blogs-content-title">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <ul class="reset-list main-Blogs-content-aurther">
                  <li><?php the_author(); ?></li>
                  <li><?php echo get_the_date('m d, Y'); ?></li>
                </ul>
                <p><?php the_excerpt(); ?></p>
                <div class="main-Blogs-content-btn">
                  <a class="main-Blogs-content-btn-arrow" href="<?php the_permalink(); ?>">Read More</a>
                </div>
              </div>
            </div>
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php 
$rblogP1 = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 12,
  'offset' => 1
));
if( $rblogP1->have_posts() ):
?>

<section class="blog-page-all-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-page-all-blog-innr">
          <div class="blog-page-all-blog-hedding">
            <h3>All Posts</h3>
          </div>
          <div class="blog-page-all-blog-cntlr">
            <ul class="reset-list clearfix">
<?php 
while( $rblogP1->have_posts() ): $rblogP1->the_post();
  $imgID = get_post_thumbnail_id(get_the_ID());
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
  if( !empty( $imgID ) ) $useImg = cbv_get_image_src($imgID); else $useImg = THEME_URI . '/assets/images/dm-pa-grid-img.png';
?>
              <li>
                <div class="blog-page-all-blog-items inline-bg" style="background: url('<?php echo $useImg; ?>');">
                 <div class="blog-page-all-blog-items-sub-title mHc">
                   <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                 </div>
                </div>
              </li>
<?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>