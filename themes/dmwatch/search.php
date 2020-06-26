<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-blog.jpg';
?>
<section class="page-banner page-bnr-lft-con page-bnr-blog searchBanner" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">Search result for: <span><?php echo get_search_query(); ?></span></h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="dm-blog-grd-sec SearchWrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-blog-grd-sec-inr">
        <?php 
          if( have_posts() ):
        ?>
          <ul class="reset-list">
          <?php 
            while(have_posts()): the_post();
              $thisID = get_the_ID();
              $postType = get_post_type($thisID);
              $categories = get_the_terms( get_the_ID(), 'category' );
              $term_name = '';
              if ( ! empty( $categories ) ) {
                  foreach( $categories as $category ) {
                     $term_name = ' | '.$category->name; 
                  }
              } 
          ?>
            <li>
              <div class="dm-blog-grd-item">
                <div>
                  <h3 class="dm-blog-grd-item-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <?php if(!empty( $postType )): ?><strong><?php echo $postType; ?></strong><?php endif; ?>
                  <?php echo get_the_excerpt(''); ?>
                  <a class="readmore" href="<?php the_permalink(); ?>">Read More</a>
                </div>
                <span></span>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
          <div class="dm-blog-srch-pagi-sec clearfix">
            <div class="dm-blog-srch-pagi-sec-inr">
              <div class="dm-blog-pagi-ctlr">
                <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer
                $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

                echo paginate_links( array(
                  'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'type'      => 'list',
                  'prev_text' => __('Prev'),
                  'next_text' => __('Next'),
                  'format'    => '?paged=%#%',
                  'show_all'  => false,
                  'end_size'  => 1,
                  'mid_size'  => 5,
                  'current'   => $current,
                  'total'     => $wp_query->max_num_pages
                ) );
              ?>
              </div>
              
            </div>
          </div>
          <?php else: ?>
            <div class="notfound">No result! Please try a different keyword.</div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>