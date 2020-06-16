<?php get_header(); ?>
<div class="home-sections-cntlr">
<?php  
  $slidersec = get_field('slidesec', HOMEID);
  $hslides = $slidersec['slides'];
  if($hslides):
?>
<section class="main-slider-sec">
  <div class="main-slider mainSlider">
    <?php 
      foreach( $hslides as $hslide ): 
        if( !empty($hslide['image']) )
          $slidesrc = cbv_get_image_src($hslide['image'], 'hmslide');
        else
          $slidesrc = '';

    ?>
    <div class="mainSLideItem" style="background: url(<?php echo $slidesrc; ?>);">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-slider-des">
                <?php 
                if( !empty($hslide['title']) ) printf('<strong class="main-slide-des-title">%s</strong>', $hslide['title']); 

                  $hlink = $hslide['link'];
                  if( is_array( $hlink ) &&  !empty( $hlink['url'] ) ){
                      printf('<a href="%s" target="%s">%s</a>', $hlink['url'], $hlink['target'], $hlink['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>    
</section>
<?php endif; ?>
<?php
  $showhideintro = get_field('showhideintro', HOMEID);
  if( $showhideintro ):
    $intro = get_field('introsec', HOMEID);
    if( $intro ):
?>
<section class="dm-watch-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dm-watch-sec-cntlr clearfix">
            <?php if(!empty($intro['image'])): ?>
            <div class="dm-watch-sec-fea-img">
              <?php echo cbv_get_image_tag($intro['image']); ?>
            </div>
            <?php endif; ?>
            <div class="dm-watch-sec-des">
            <?php 
              if( !empty($intro['title']) ) printf('<h1 class="dmwsd-title">%s</h1>', $intro['title']);
              if( !empty($intro['description']) ) echo wpautop( $intro['description'] );
            ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>
<?php
  $showhidepractice = get_field('showhidepractice', HOMEID);
  if( $showhidepractice ):
    $practice = get_field('practicearea', HOMEID);
    if( $practice ):
?>
<section class="hm-practice-area-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-sec-hdr">
        <?php 
          if( !empty($practice['title']) ) printf('<h2 class="hmpashdr-title">%s</h2>', $practice['title']);
          if( !empty($practice['description']) ) echo wpautop( $practice['description'] );
        ?>
        </div>
      </div>
    </div>
    <?php 
      $practices = $practice['practiceareas']; 
      if( $practices ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-items hmPracticeAreaSlider">
          <?php foreach( $practices as $pract ): ?>
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <?php 
                if( !empty($pract['image']) ):
                  echo cbv_get_image_tag($pract['image'], 'hareas');
                endif;
                ?>
              </div>
              <div class="hm-practice-area-item-des">
                <a href="#" class="overlay-link"></a>
                <?php 
                  if( !empty($pract['title']) ) printf('<h4 class="mHc hm-practice-area-item-title">%s</h4>', $pract['title']);
                  if( !empty($pract['description']) ) echo wpautop( $pract['description'] );
                ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        
      </div>
    </div>
    <?php endif; ?>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideservices = get_field('showhideservices', HOMEID);
  if( $showhideservices ):
    $service = get_field('featuredservices', HOMEID);
    if( $service ):
?>
<section class="hm-fea-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-sec-hdr">
        <?php if( !empty($service['title']) ) printf('<h2 class="hmfsshdr-title">%s</h2>', $service['title']); ?>
        </div>
      </div>
    </div>
    <?php 
      $services = $service['fservices']; 
      if( $services ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-cntlr">
          <div class="hm-fea-services hmFeaServicesSlider">
            <?php foreach( $services as $serv ): ?>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
              
                <div class="hm-fea-service-item-img">
                <?php 
                  if( !empty($serv['icon']) ):
                    echo cbv_get_image_tag($serv['icon']);
                  endif;
                ?>
                </div>
                <div class="hm-fea-service-item-des">
                <?php 
                  if( !empty($serv['title']) ) printf('<h5 class="hmfsid-title mHc">%s</h5>', $serv['title']);
                  if( !empty($serv['description']) ) echo wpautop( $serv['description'] );
                ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="fl-see-all-btn">
            <a href="#" data-toggle="modal" data-target="#hmFeaServices_modal" href="#">SEE ALL</a>
          </div>

<div class="modal fade hmFeaServicesModal dm-modal-con-wrap" id="hmFeaServices_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo THEME_URI; ?>/assets/images/close-icon.jpg"></span>
      </button>

      <div class="info-popup-container">
        <div class="info-popup-cntlr-inr clearfix">
          <h3 class="hmFeaServicesModal-hdr">FEATURED SERVICES</h3>
          <div class="hm-fea-services hmFeaServicesSlider">
            <?php foreach( $services as $serv ): ?>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
              
                <div class="hm-fea-service-item-img">
                <?php 
                  if( !empty($serv['icon']) ):
                    echo cbv_get_image_tag($serv['icon']);
                  endif;
                ?>
                </div>
                <div class="hm-fea-service-item-des">
                <?php 
                  if( !empty($serv['title']) ) printf('<h5 class="hmfsid-title mHc">%s</h5>', $serv['title']);
                  if( !empty($serv['description']) ) echo wpautop( $serv['description'] );
                ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
        </div>

      </div>
    </div>
  </div>
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
  $showhideclients = get_field('showhideclients', HOMEID);
  if( $showhideclients ):
    $client = get_field('clientspartners', HOMEID);
    if( $client ):
?>
<section class="hm-clients-partners-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-clients-partners-sec-hdr">
        <?php 
          if( !empty($client['title']) ) printf('<h2 class="hmcpshdr-title">%s</h2>', $client['title']);
          if( !empty($client['description']) ) echo wpautop( $practice['description'] );
        ?>
        </div>
      </div>
    </div>
    <?php 
      $logos = $client['logos']; 
      if( $logos ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="clients-partners-logos-cntlr">
          <div class="clients-partners-logos clientsPartnersLogosSlider">
            <?php foreach( $logos as $logo ): ?>
            <div class="clientsPartnersLogosSlideItem">
              <div>
                <?php 
                  if( !empty($logo['icon']) ):
                    echo cbv_get_image_tag($logo['icon']);
                  endif;
                ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="fl-see-all-btn">
            <a href="/our-clients/">SEE ALL</a>
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
  $showhidecounter = get_field('showhidecounter', HOMEID);
  if( $showhidecounter ):
    $counters = get_field('countersec', HOMEID);
    if( $counters ):
      $counts = $counters['counterr'];
?>
<section class="hm-counter-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-counter-cntlr">
          <?php if( $counts ): ?>
          <ul class="reset-list">
            <?php foreach( $counts as $countr ): ?>
            <li>
              <div class="hm-counter-item">
                <?php 
                  if( !empty($countr['value']) ) printf('<strong class="counter">%s</strong>', $countr['value']);
                  if( !empty($countr['title']) ) printf('<span>%s</span>', $countr['title']);
                ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>
<?php 
  $terms = get_terms( array(
    'taxonomy' => 'practice_area',
    'hide_empty' => false,
    'parent' => 0,
    'orderby'  => 'term_order',
    'order'    => 'ASC'
) );
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ 
?>
<section class="hm-projects-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix hm-projects-tabs">
          <?php $i = 1; foreach ( $terms as $term ) { ?>
            <button class="tab-link<?php echo ($i == 1)? ' current': ''; ?>" data-tab="tab-<?php echo $i; ?>"><span><?php echo $term->name; ?></span></button>
          <?php $i++; } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php $i = 1; foreach ( $terms as $term ) { ?>
        <div id="tab-<?php echo $i; ?>" class="fl-tab-content<?php echo ($i == 1)? ' current': ''; ?>">
          <div class="hm-projects-tab-con">
            <div class="hm-project-tab-short-des">
              <?php if( !empty($term->description) ) echo wpautop($term->description); ?>
            </div>
            <?php 
              $query = new WP_Query(array( 
                  'post_type'=> 'project',
                  'post_status' => 'publish',
                  'posts_per_page' => 12,
                  'orderby' => 'date',
                  'order'=> 'ASC',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'practice_area',
                      'field' => 'term_id',
                      'terms' => $term->term_id
                    )
                  )
                ) 
              );
              if($query->have_posts()):
            ?>
            <div class="hm-project-tab-slider hmProTabSlider">
              <?php 
                while($query->have_posts()): $query->the_post();
                  $pintro = get_field('introsec', get_the_ID());
                  if( !empty($pintro['image']) ):
                    $project_src = cbv_get_image_src($pintro['image'], 'projectgrid');
                  else:
                    $project_src = '';
                  endif;
              ?>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon" style="background: url(<?php echo $project_src; ?>);">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="hmProTabSlideItemCon-hover">
                    <div class="hmProTabSlideItemCon-hover-inr">
                      <strong><?php the_title(); ?></strong>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
            <?php endif;  wp_reset_postdata(); ?>
          </div>
        </div>
        <?php $i++; } ?>
      </div>
    </div>
  </div>    
</section> 
<?php } ?> 
</div>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>