<?php 
/*
  Template Name: Success Stories
*/
get_header();
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event exSuccessStories" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/success-stories.png);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <div class="topLine"><img src="<?php echo THEME_URI; ?>/assets/images/sc-top-bar.png"></div>
          <h1 class="page-banner-title">SUCCESS STORIES</h1>
          <p>Water, sanitation and hygiene are at the very core of sustainable development,<br> crucial for survival of people and the planet.</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="storiesPageCn">
<section class="sec-bg-gray event-media-page-tab-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>Notable events </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Initiate</span></button>
          <button class="tab-link" data-tab="tab-3"><span>Advocacy</span></button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="event-media-page-tab-con">
  <div id="tab-1" class="fl-tab-content current">
    <div class="notableEvents">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'success_stories',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'publication_type',
                          'field'    => 'slug',
                          'terms'    => 'notable-events',
                          ),
                    ),
                  ) 
                );
                if($ucquery->have_posts()):
              ?>
            <ul class="clearfix reset-list publicatinList notableEventsList">
                <?php 
                 while($ucquery->have_posts()): $ucquery->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id);
                  else
                    $event_src = '';   
                ?>
              <li>
                <div class="filter-result-items">
                  <div class="filter-result-items-des">
                      <h3 class="publicatons-sec-one-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <span>2020 | Policy Brief</span>
                      <p><?php echo get_the_excerpt(''); ?> <a href="<?php the_permalink(); ?>">Continue Reading...</a></p>
                  </div>
                  <div class="filter-result-items-img">
                    <img src="<?php echo $event_src; ?>">
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
    <div class="notableEventsCn" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="notableEventsCnIn">
            <h2>Lorem ipsum</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
   <div id="tab-2" class="fl-tab-content">
    <div class="notableEvents">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php 
                $ucquery1 = new WP_Query(array( 
                    'post_type'=> 'success_stories',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'publication_type',
                          'field'    => 'slug',
                          'terms'    => 'initiate',
                          ),
                    ),
                  ) 
                );
              if($ucquery1->have_posts()):
            ?>
            <ul class="clearfix reset-list publicatinList notableEventsList">
                <?php 
                 while($ucquery1->have_posts()): $ucquery1->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id);
                  else
                    $event_src = '';   
                ?>
              <li>
                <div class="filter-result-items">
                  <div class="filter-result-items-des">
                      <h3 class="publicatons-sec-one-title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                      <span>2020 | Policy Brief</span>
                      <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Continue Reading...</a> </p>
                  </div>
                  <div class="filter-result-items-img">
                    <img src="<?php echo $event_src; ?>">
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="initiateEventsCn" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="notableEventsCnIn">
            <h2>Lorem ipsum</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="initiateEventItems">
          <div class="dm-advisor-grd-item-wrap">
            <ul class="reset-list clearfix">
              <li>
                <div class="dm-advisor-grd-item">
                  <div class="dm-advisor-grd-item-img-ctlr">
                    <a href="#" class="overlay-link"></a>
                    <div class="dm-advisor-grd-item-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png">
                    </div>
                  </div>
                  <div class="dm-advisor-grd-item-des mHc">
                    <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                    <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                    <a href="#">
                    View Full
                    <i></i>
                    </a>
                  </div>
                </div>
              </li>
              <li>
                <div class="dm-advisor-grd-item">
                  <div class="dm-advisor-grd-item-img-ctlr">
                    <a href="#" class="overlay-link"></a>
                    <div class="dm-advisor-grd-item-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-02.png">
                    </div>
                  </div>
                  <div class="dm-advisor-grd-item-des mHc">
                    <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                    <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                    <a href="#">
                    View Full
                      <i></i>
                    </a>
                  </div>
                </div>
              </li>
              <li>
                <div class="dm-advisor-grd-item">
                  <div class="dm-advisor-grd-item-img-ctlr">
                    <a href="#" class="overlay-link"></a>
                    <div class="dm-advisor-grd-item-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-03.png">
                    </div>
                  </div>
                  <div class="dm-advisor-grd-item-des mHc">
                    <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                    <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                    <a href="#">
                    View Full
                      <i></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
   <div id="tab-3" class="fl-tab-content">
      <div class="advocacyCn">
        <div class="container">
          <div class="row">
            <?php 
                $ucquery = new WP_Query(array( 
                    'post_type'=> 'success_stories',
                    'post_status' => 'publish',
                    'posts_per_page' =>-1,
                    'orderby' => 'date',
                    'order'=> 'ASC',
                    'tax_query' => array(
                      array(
                         'taxonomy' => 'publication_type',
                          'field'    => 'slug',
                          'terms'    => 'advocacy',
                          ),
                    ),
                  ) 
                );
              if($ucquery->have_posts()):
            ?>
            <div class="col-sm-12">
                <?php 
                 while($ucquery->have_posts()): $ucquery->the_post();
                 $attach_id = get_post_thumbnail_id(get_the_ID());
                  if( !empty($attach_id) )
                    $event_src = cbv_get_image_src($attach_id);
                  else
                    $event_src = '';   
                ?>
              <div class="upcoming-event-con clearfix">
                <div class="upcoming-event-con-lft">
                  <div class="upcoming-event-fea-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/ss-advocacy.png);">
                  </div>
                </div>
                <div class="upcoming-event-con-rgt">
                  <h3 class="uec-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Continue Reading...</a> </p>
                </div>
                
              </div>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="initiateEventsCn" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="notableEventsCnIn">
              <h2>Lorem ipsum</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
              <div class="initiateEventItems">
            <div class="dm-advisor-grd-item-wrap">
              <ul class="reset-list clearfix">
                <li>
                  <div class="dm-advisor-grd-item">
                    <div class="dm-advisor-grd-item-img-ctlr">
                      <a href="#" class="overlay-link"></a>
                      <div class="dm-advisor-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png">
                      </div>
                    </div>
                    <div class="dm-advisor-grd-item-des mHc">
                      <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                      <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                      <a href="#">
                      View Full
                      <i></i>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dm-advisor-grd-item">
                    <div class="dm-advisor-grd-item-img-ctlr">
                      <a href="#" class="overlay-link"></a>
                      <div class="dm-advisor-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-02.png">
                      </div>
                    </div>
                    <div class="dm-advisor-grd-item-des mHc">
                      <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                      <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                      <a href="#">
                      View Full
                        <i></i>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dm-advisor-grd-item">
                    <div class="dm-advisor-grd-item-img-ctlr">
                      <a href="#" class="overlay-link"></a>
                      <div class="dm-advisor-grd-item-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-03.png">
                      </div>
                    </div>
                    <div class="dm-advisor-grd-item-des mHc">
                      <h5 class="dm-advisor-grd-item-des-title"><a href="#">Lorem Ipsum</a></h5>
                      <span>Lorem Ipsum Lorem Ipsum Executive Officer, ABD</span>
                      <a href="#">
                      View Full
                        <i></i>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
              </div>
            </div>
          </div>
        </div>      
      </div>
  </div>
</section>
</section>



<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>