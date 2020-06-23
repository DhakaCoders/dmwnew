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
<section class="page-banner page-bnr-rgt-con page-bnr-title-semi page-bnr-practice-areas designThree" style="overflow: hidden;">
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
<?php 
if( $intro ): 
$bgcolor = $intro['bg_color'];
$textcolor = $intro['text_color'];
if( !empty($textcolor) ):
?>
<style type="text/css">
  .dm-we-do-dsc p, .dm-we-do-dsc h2{
    color:<?php echo $textcolor?> !important;
  }
</style>
<?php endif; ?>
<section class="dm-we-do-content-sec-wrp">
  <div class="container-md">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-we-do-dsc-wrp" style="<?php echo (!empty($bgcolor))? 'background:'.$bgcolor: ''; ?>">
          <div class="dm-we-do-dsc">
          <?php 
            if( !empty($intro['title']) ) printf('<h2 class="dm-about-sec-title">%s</h2>', $intro['title'] );
          ?>
          <div class="initTxt">
          <?php if(!empty($intro['description'])) echo wpautop( $intro['description'] ); ?>
          </div>
          <?php if(!empty($intro['readmore_description'])): ?>
            <div class="continue-reading-desc">
              <?php echo wpautop( $intro['readmore_description'] ); ?>
            </div>
          <?php endif; ?>
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


<?php
  $showhideservices = get_field('showhideservices', 384);
  if( $showhideservices ):
    $fservices = get_field('featuredservices', 384);
    if( $fservices ):
     $services = $fservices['services'];
?>
<section class="hm-fea-services-sec hm-fea-services-sec-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-sec-hdr">
          <?php if( !empty($fservices['title']) ) printf('<h2 class="hmfsshdr-title">%s</h2>', $fservices['title'] ); ?>
        </div>
      </div>
    </div>
    <?php if( $services ): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-cntlr">
          <div class="hm-fea-services hmFeaServicesSlider">
            <?php 
            $tcolor = '';
            foreach( $services as $service ): 
              $servIcon = $service['icon'];
              if( !empty($service['title_text_color']) ){
                $tcolor = $service['title_text_color'];
              }
            ?>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img mHc1">
                  <?php 
                  if( is_array($servIcon) ){
                    echo '<img src="'.$servIcon['url'].'" alt="'.$servIcon['alt'].'" title="'.$servIcon['title'].'">';
                  }
                ?>
                </div>
                <div class="hm-fea-service-item-des">
                  <?php if( !empty($service['title']) ) printf('<h5 class="hmfsid-title mHc" style="color: %s">%s</h5>', $tcolor, $service['title'] ); ?>
                  <?php if( !empty($service['description']) ) echo wpautop( $service['description'] ); ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideproject = get_field('showhideproject', 384);
  if( $showhideproject ):
    $projects = get_field('projectfilter', 384);
    if( $projects ):
?>
<section class="dm-featured-project-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-featured-project-sec-hdr">
          <?php if( !empty($projects['title']) ) printf('<h2 class="dmfpshdr-title">%s</h2>', $projects['title'] ); ?>
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
            <?php 
            $ongoingIDS = $projects['ongoing_projects'];
            if( !empty($ongoingIDS) ){
              $count = count($ongoingIDS);
              $oquery = new WP_Query(array( 
              'post_type'=> 'project',
              'post_status' => 'publish',
              'posts_per_page'=> $count,
              'post__in' => $ongoingIDS,
              'tax_query' => array(
                array(
                  'taxonomy' => 'practice_area',
                  'field' => 'slug',
                  'terms' => 'ongoing-projects'
                )
              )
              ) 
            );
            ?>
            <?php if( $oquery->have_posts() ):?>
              <div class="filter-results-grd-cntlr">
                <ul class="clearfix reset-list">
                <?php 
                  while($oquery->have_posts()): $oquery->the_post();
                    $pintro = get_field('introsec', get_the_ID());
                    if( !empty($pintro['image']) ):
                      $oproject = cbv_get_image_src($pintro['image'], 'projectgrid');
                      $oproject_tag = cbv_get_image_tag($pintro['image'], 'projectgrid');
                    else:
                      $oproject = '';
                      $oproject_tag = '';
                    endif;
                ?>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo $oproject; ?>);">
                          <?php echo $oproject_tag; ?>
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong><?php the_title(); ?> <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <?php endif; wp_reset_postdata(); ?>
              <?php }else{ ?>
                <div class="noresult" style="text-align:center; padding:20px 0;">No Results. Please check back soon!</div>
              <?php } ?>
            </div>
          </div>
          <div id="tab-2" class="fl-tab-content current">
            <div class="dm-featured-project-tabs-con">
            <?php 
            $completedIDS = $projects['completed_projects'];
            if( !empty($completedIDS) ){
              $ccount = count($completedIDS);
              $cquery = new WP_Query(array( 
              'post_type'=> 'project',
              'post_status' => 'publish',
              'posts_per_page'=> $ccount,
              'post__in' => $completedIDS,
              'tax_query' => array(
                array(
                  'taxonomy' => 'practice_area',
                  'field' => 'slug',
                  'terms' => 'completed-projects'
                )
              )
              ) 
            );
            ?>
            <?php if( $cquery->have_posts() ):?>
              <div class="filter-results-grd-cntlr">
                <ul class="clearfix reset-list">
                  <?php 
                  while($cquery->have_posts()): $cquery->the_post();
                    $pintro = get_field('introsec', get_the_ID());
                    if( !empty($pintro['image']) ):
                      $oproject = cbv_get_image_src($pintro['image'], 'projectgrid');
                      $oproject_tag = cbv_get_image_tag($pintro['image'], 'projectgrid');
                    else:
                      $oproject = '';
                      $oproject_tag = '';
                    endif;
                ?>
                  <li>
                    <div class="filter-results-grd-item">
                      <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                      <div class="filter-results-img-cntlr">
                        <div class="filter-results-img" style="background: url(<?php echo $oproject; ?>);">
                          <?php echo $oproject_tag; ?>
                        </div>
                      </div>
                      <div class="filter-results-img-hover">
                        <div>
                          <strong><?php the_title(); ?> <i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <?php endif; wp_reset_postdata(); ?>
              <?php }else{ ?>
                <div class="noresult" style="text-align:center; padding:20px 0;">No Result!</div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $pageIDs = get_field('select_logos', 'options');
  if( !empty($pageIDs) ):
    $count = count($pageIDs);
    $query = new WP_Query(array( 
    'post_type'=> 'page',
    'post_status' => 'publish',
    'posts_per_page'=> $count,
    'post__in' => $pageIDs
    ) 
  );
?>
<?php if( $query->have_posts() ):?>
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
            <?php 
              while($query->have_posts()): $query->the_post();
              $intro2 = get_field('introsec', get_the_ID()); 
            ?>
            <li>
              <div class="dm-pa-service-innr">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <div class="dm-pa-service-img">
                  <?php 
                    if( !empty($intro2['logo']) ):
                      echo cbv_get_image_tag($intro2['logo']);
                    endif;
                  ?>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>
<?php endif; ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>