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
              <div class="publicatons-page-top-sec-img">
                <div class="rp-img">
                  <?php echo $pub_tag; ?>
                </div>
                <div class="rp-desc">
                  <h4><?php the_title(); ?></h4>
                  <span>Publication <?php echo get_the_date('Y'); ?> | Policy Brief</span>
                </div>
              </div>
              <div class="publicatons-page-top-sec-des">
                <div class="publicatons-top-title">
                  <p>Recent Publication <?php echo get_the_date('Y'); ?></p>
                </div>
                <h3 class="publicatons-sec-one-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span><?php echo get_the_date('Y'); ?> | Policy Brief</span>
                <?php echo wpautop(cbv_get_excerpt()); ?>
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
<?php 
  $pyears = $ptype = ''; 
  if ( isset($_GET['type']) && !empty($_GET['type'])){
    $ptype = $_GET['type'];
  } 

  if ( isset($_GET['years']) && !empty($_GET['years'])){
    $pyears = $_GET['years'];
  }
?>
<section class="our-project-filter-hdr-sec publicationsFilter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-project-filter-hdr">
          <h2 class="opfhdr-title">Filter Publications</h2>
        </div>
        <div class="our-project-filter-btns">
          <form action="" method="get">
          <ul class="reset-list clearfix">
            <?php 
            $types = get_terms( array(
              'taxonomy' => 'publication_type',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>Type</span></button></div>
                <?php if ( ! empty( $types ) && ! is_wp_error( $types ) ){  ?>
                <div class="filter-btn-dorpdown">
                  <?php $i = 10; foreach ( $types as $type ) { ?>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="radio" id="pa<?php echo $i; ?>" <?php echo ( $ptype == $type->slug )? 'checked': ''; ?> name="type" value="<?php echo $type->slug; ?>">
                      <span class="checkmark"></span> 
                      <label for="pa<?php echo $i; ?>"><?php echo $type->name; ?></label> 
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php 
            $years = get_terms( array(
              'taxonomy' => 'publication_year',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>Year</span></button></div>
                <?php if ( ! empty( $years ) && ! is_wp_error( $years ) ){  ?>
                  <div class="filter-btn-dorpdown">
                    <?php $i = 20; foreach ( $years as $year ) { ?>
                    <div class="filter-btn-dorpdown-item">
                      <div class="filter-check-row clearfix">
                        <input type="radio" id="pa<?php echo $i; ?>" <?php echo ( $pyears == $year->slug )? 'checked': ''; ?> name="years" value="<?php echo $year->slug; ?>">
                        <span class="checkmark"></span> 
                        <label for="pa<?php echo $i; ?>"><?php echo $year->name; ?></label> 
                      </div>
                    </div>
                    <?php $i++; } ?>
                  </div>
                <?php } ?>
              </div>
            </li>
            <li>
              <div class="fl-filter-btn-cntlr">
                <button type="submit">Filter Now</button>
              </div>
            </li>
          </ul>
          <div class="reset-filter-btn">
            <button class="clearnow" type="reset">Reset Filter</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if( !empty($ptype) OR !empty($pyears) ): ?>
<section class="filter-result-sec-four">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filter-result-innr">
          <div class="filter-result-hedding">
            <h2 class="opfhdr-title">FILTER RESULT</h2>
          </div>
          <span id="filter" data-type="<?php echo $ptype; ?>" data-year="<?php echo $pyears; ?>" style="display: none;"></span>
          <div class="filter-result-items-wrap">
            <?php echo do_shortcode('[ajax_public_posts]'); ?>
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