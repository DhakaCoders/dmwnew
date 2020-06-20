<?php
get_header(); 
$thisID = 52;

$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-our-project.jpg';


$bcontent = get_field('bcontent', $thisID);
?>
<section class="page-banner page-bnr-lft-con page-bnr-our-project" style="overflow: hidden;">
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
  $pyears = $pstatus = $pclient = $pregion = '';
  $taxs = array();
  if ( isset($_GET['status']) && !empty($_GET['status'])){
    $taxs[] = array(
      'taxonomy' => 'practice_area',
      'field' => 'slug',
      'terms' => $_GET['status']
    );
    $pstatus = $_GET['status'];
  }
  if ( isset($_GET['client']) && !empty($_GET['client'])){
    $taxs[] = array(
      'taxonomy' => 'client',
      'field' => 'slug',
      'terms' => $_GET['client']
    );
    $pclient = $_GET['client'];
  } 
  if ( isset($_GET['region']) && !empty($_GET['region'])){
    $taxs[] = array(
      'taxonomy' => 'region',
      'field' => 'slug',
      'terms' => $_GET['region']
    );
    $pregion = $_GET['region'];
  } 

  if ( isset($_GET['years']) && !empty($_GET['years'])){
    $taxs[] = array(
      'taxonomy' => 'years',
      'field' => 'slug',
      'terms' => $_GET['years']
    );
    $pyears = $_GET['years'];
  }
?>
<section class="our-project-filter-hdr-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-project-filter-hdr">
          <h2 class="opfhdr-title">OUR PROJECTS</h2>
        </div>
        <div class="our-project-filter-btns">
          <form action="" method="get">
            <?php 
            $aareas = get_terms( array(
              'taxonomy' => 'practice_area',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
          <ul class="reset-list clearfix">
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>PRACTICE AREA</span></button></div>
                <?php if ( ! empty( $aareas ) && ! is_wp_error( $aareas ) ){  ?>
                <div class="filter-btn-dorpdown">
                  <?php $i = 1; foreach ( $aareas as $aarea ) { ?>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa<?php echo $i; ?>" <?php echo ( $pstatus == $aarea->slug )? 'checked': ''; ?> name="status" value="<?php echo $aarea->slug; ?>">
                      <span class="checkmark"></span> 
                      <label for="pa<?php echo $i; ?>"><?php echo $aarea->name; ?></label> 
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php 
            $clients = get_terms( array(
              'taxonomy' => 'client',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>CLIENT</span></button></div>
                <?php if ( ! empty( $clients ) && ! is_wp_error( $clients ) ){  ?>
                <div class="filter-btn-dorpdown">
                  <?php $i = 10; foreach ( $clients as $client ) { ?>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa<?php echo $i; ?>" <?php echo ( $pclient == $client->slug )? 'checked': ''; ?> name="client" value="<?php echo $client->slug; ?>">
                      <span class="checkmark"></span> 
                      <label for="pa<?php echo $i; ?>"><?php echo $client->name; ?></label> 
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php 
            $regions = get_terms( array(
              'taxonomy' => 'region',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>REGION</span></button></div>
                <?php if ( ! empty( $regions ) && ! is_wp_error( $regions ) ){  ?>
                <div class="filter-btn-dorpdown">
                  <?php $i = 20; foreach ( $regions as $region ) { ?>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa<?php echo $i; ?>" <?php echo ( $pregion == $region->slug )? 'checked': ''; ?> name="region" value="<?php echo $region->slug; ?>">
                      <span class="checkmark"></span> 
                      <label for="pa<?php echo $i; ?>"><?php echo $region->name; ?></label> 
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php 
            $years = get_terms( array(
              'taxonomy' => 'years',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr filter-btn-year-cntlr">
                <div class="filter-btn"><button type="button"><span>YEAR</span></button></div>
                <?php if ( ! empty( $years ) && ! is_wp_error( $years ) ){  ?>
                <div class="filter-btn-dorpdown">
                  <?php $i = 40; foreach ( $years as $year ) { ?>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa<?php echo $i; ?>" <?php echo ( $pyears == $year->slug )? 'checked': ''; ?> name="years" value="<?php echo $year->slug; ?>">
                      <span class="checkmark"></span> 
                      <label for="pa<?php echo $i; ?>"><?php echo $year->name; ?></label> 
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
                <?php } ?>
              </div>
            </li>
          </ul>
          <div class="search-filter-btn">
            <button type="submit">FILTER NOW</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$taxquery = '';
if( $taxs ){
  if(count($taxs) > 1){
    $taxquery = array(
    'relation' => 'AND',
    $taxs
    );
  } else{
    $taxquery = array($taxs);
  }
}
$query = new WP_Query(array( 
    'post_type'=> 'project',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'date',
    'order'=> 'ASC',
    'tax_query' => $taxquery

  ) 
);
if($query->have_posts()):
?>
<section class="our-project-filter-results-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( !empty($taxquery) ): ?>
        <div class="filter-results-sec-hdr">
          <h3 class="filter-results-sec-hdr-title">FILTER RESULT</h3>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-md-12">
        <div class="filter-results-grd-cntlr">
          <ul class="clearfix reset-list">
            <?php 
              while($query->have_posts()): $query->the_post();
                $pintro = get_field('introsec', get_the_ID());
            ?>
            <li>
              <div class="filter-results-grd-item">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <div class="filter-results-img-cntlr">
                  <?php if( !empty($pintro['image']) ): ?>
                  <div class="filter-results-img" style="background: url(<?php echo cbv_get_image_src($pintro['image'], 'projectgrid'); ?>);">
                    <?php echo cbv_get_image_tag($pintro['image'], 'projectgrid'); ?>
                  </div>
                  <?php else: ?>
                    <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg);">
                    <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg">
                  </div>
                  <?php endif; ?>
                </div>
                <div class="filter-results-img-hover">
                  <div>
                    <strong><?php the_title(); ?><i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>

          <div class="dm-blog-pagi-ctlr">
          <?php
          if( $query->max_num_pages > 1 ):
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_text' => __('Prev'),
              'next_text' => __('Next'),
              'format'    => '?paged=%#%',
              'show_all'  => false,
              'end_size'  => 1,
              'mid_size'  => 5,
              'total'     => $wp_query->max_num_pages
            ) );
            endif; 
        ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
  <section class="our-project-filter-results-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filter-results-sec-hdr">
          <h3 class="filter-results-sec-hdr-title">NO RESULT!</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;  wp_reset_postdata(); ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>