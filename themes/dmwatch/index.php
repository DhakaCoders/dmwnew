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

<section class="dm-blog-grd-sec">
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
                  <h2 class="dm-blog-grd-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <strong><?php echo get_the_date('M d, Y'); ?><?php echo $term_name; ?></strong>
                  <?php the_excerpt(); ?>
                </div>
                <span></span>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
          <div class="dm-blog-srch-pagi-sec clearfix">
            <div class="dm-blog-srch-pagi-sec-inr">
              <div class="dm-blog-secr">
                <span>Search</span>
                <div class="hdr-search">
                  <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
                        <input type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Enter Search Keyword...">
                      <button><i class="fas fa-search"></i></button>
                  </form>
                </div>
              </div>
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
            <div class="notfound">No result!</div>
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