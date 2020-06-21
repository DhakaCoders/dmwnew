<?php 
/*
  Template Name: Publications
*/
get_header();
?>
<?php 
  $query = new WP_Query(array( 
    'post_type'=> 'publication',
    'post_status' => 'publish',
    'posts_per_page'=> 1,
    'orderby' => 'date',
    'order'=> 'DESC'
    ) 
  );
?>
<?php if( $query->have_posts() ):?>
<section class="recent-publicatons">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="clearfix reset-list">
          <?php 
            while($query->have_posts()): $query->the_post();
            $attach_id = get_post_thumbnail_id(get_the_ID());
            if( !empty($attach_id) )
              $pub_tag = cbv_get_image_tag($attach_id,'publicationgird');
            else
              $pub_tag = ''; 

              $recentID = get_the_ID();   
          ?>
          <li>
            <div class="publicatons-page-top-sec-innr clearfix">
              <div class="publicatons-page-top-sec-des">
                <div class="publicatons-top-title">
                  <p>Recent Publication <?php echo get_the_date('Y'); ?></p>
                </div>
                <h3 class="publicatons-sec-one-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span><?php echo get_the_date('Y'); ?> | Policy Brief</span>
                <?php echo wpautop(cbv_get_excerpt()); ?>
              </div>
              <div class="publicatons-page-top-sec-img">
                <div class="rp-img">
                  <?php echo $pub_tag; ?>
                </div>
                <div class="rp-desc">
                  <h4><?php the_title(); ?></h4>
                  <span>Publication <?php echo get_the_date('Y'); ?> | Policy Brief</span>
                </div>
              </div>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>
<span id="recentID" data-postid="<?php echo $recentID; ?>" style="display: none;"></span>

<section class="our-project-filter-hdr-sec publicationsFilter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-project-filter-hdr">
          <h2 class="opfhdr-title">Filter Publications</h2>
        </div>
        <div class="our-project-filter-btns">
          <ul class="reset-list clearfix">
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button><span>LOREM IPSUM</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa1" name="show_ongoing_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa1"> Lorem Ipsum</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa2" name="show_completed_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa2"> Lorem Ipsum</label> 
                    </div>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button><span>LOREM IPSUM</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa3" name="show_client_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa3"> Lorem Ipsum</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa4" name="show_client_c_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa4"> Lorem Ipsum</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button><span>LOREM IPSUM</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa5" name="show_regoing_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa5"> Lorem Ipsum</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa6" name="show_regoing_project_2" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa6"> Lorem Ipsum</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr filter-btn-year-cntlr">
                <div class="filter-btn"><button><span>LOREM IPSUM</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa7" name="year_1" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa7">Lorem Ipsum</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa8" name="year_2" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa8">Lorem Ipsum</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="search-filter-btn">
            <button>FILTER NOW</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="filter-result-sec-four">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filter-result-innr">
          <div class="filter-result-hedding">
            <h2 class="opfhdr-title">FILTER RESULT</h2>
          </div>
          <div class="filter-result-items-wrap">
            <?php echo do_shortcode('[ajax_public_posts]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>