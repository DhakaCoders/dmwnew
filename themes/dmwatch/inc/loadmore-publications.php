<?php
/*
 * initial posts dispaly
 */

function public_script_load_more($args = array()) {
  $query = new WP_Query(array( 
    'post_type'=> 'publication',
    'post_status' => 'publish',
    'posts_per_page'=> 1,
    'orderby' => 'date',
    'order'=> 'ASC'
    ) 
  );
  if( $query->have_posts() ):

while($query->have_posts()): $query->the_post();
    $recentID = get_the_ID();
 endwhile;
  echo '<ul class="clearfix reset-list publicatinList" id="public-content">';
      ajax_public_script_load_more($args, $recentID);
  echo '</ul>';
  echo '<div class="fl-see-all-btn">
  <div class="ajaxloading" id="publicloader" style="display:none"><img src="'.THEME_URI.'/assets/images/loading.gif" alt="loader"></div>
   <a href="#" id="publicloadMore"  data-page="1" data-url="'.admin_url("admin-ajax.php").'" >SEE ALL</a>';
   echo '</div>';
  else:

  endif; wp_reset_postdata();
}
/*
 * create short code.
 */
add_shortcode('ajax_public_posts', 'public_script_load_more');


/*
 * load more script call back
 */
function ajax_public_script_load_more($args, $recentID = '') {
    //init ajax
    $ajax = false;
    //check ajax call or not
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $ajax = true;
    }
    //number of posts per page default
    $num = 3;
    //page number
    $paged = 1;
    if(isset($_POST['page']) && !empty($_POST['page'])){
        $paged = $_POST['page'] + $paged;
    }
    echo $recentID;
    $query = new WP_Query(array( 
      'post_type'=> 'publication',
      'post_status' => 'publish',
      'posts_per_page' =>$num,
      'paged'=>$paged,
      'orderby' => 'date',
      'order'=> 'DESC',
      'post__in' => array($recentID)
      ) 
    );
    if($query->have_posts()){
    while($query->have_posts()): $query->the_post();
    $attach_id = get_post_thumbnail_id(get_the_ID());
    if( !empty($attach_id) )
      $pub_tag = cbv_get_image_tag($attach_id,'publicationgird');
    else
      $pub_tag = ''; 
    ?>
    <li>
      <div class="filter-result-items">
        <div class="filter-result-items-des">
            <h3 class="publicatons-sec-one-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <span><?php echo get_the_date('Y'); ?> | Policy Brief</span>
            <?php echo wpautop(cbv_limit_excerpt()); ?>
        </div>
        <div class="filter-result-items-img">
          <?php echo $pub_tag; ?>
          <div class="rp-desc">
            <h4><?php the_title(); ?></h4>
            <span>Publication <?php echo get_the_date('Y'); ?> | Policy Brief</span>
          </div>
        </div>
      </div>
    </li>
    <?php
    endwhile;
     
    }else{
      //echo '<div class="postnot-found" style="text-align:center; padding:20px 0;">No results!</div>';
      echo '<style>.fl-see-all-btn{display:none;}</style>';
    }  
    
    wp_reset_postdata();
    
    //check ajax call
    if($ajax) wp_die();
}

/*
 * load more script ajax hooks
 */
add_action('wp_ajax_nopriv_ajax_public_script_load_more', 'ajax_public_script_load_more');
add_action('wp_ajax_ajax_public_script_load_more', 'ajax_public_script_load_more');