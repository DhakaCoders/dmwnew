<?php 
/*
  Template Name: Clients
*/
get_header();
$thisID = get_the_ID();
$desc = get_field('description', $thisID);
$page_title="";

$custom_title_get = get_field('custom_page_title', $post->ID);
$custom_title = preg_replace('/\s+/', '', $custom_title_get);
if (!empty($custom_title)) {
  $page_title = $custom_title_get;
}else{
  $page_title = get_the_title($thisID);
}
?>

<section class="client-partners-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="client-partners-innr">
          <div class="client-partners-hedding">
            <span><?php echo $page_title; ?> »</span>
          </div>
          <div class="client-partners-des">
            <?php if( !empty($desc) ) echo wpautop( $desc ); ?>
          </div>
          <?php  
            $clquery = new WP_Query(array( 
                'post_type'=> 'client',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order'=> 'DESC'
              ) 
            );
            if($clquery->have_posts()):
          ?>
          <div class="client-partners-items-wrap">
            <ul class="ulc reset-list clearfix">
              <?php 
               while($clquery->have_posts()): $clquery->the_post();
                  $logos = get_field('intro');
                  $logIcon = $logos['icon'];
              ?>
              <li>
                <div class="client-partners-items">
                  <?php if( !empty($logos['link']) ): ?>
                    <a href="<?php echo $logos['link']; ?>" class="overlay-link"></a>
                  <?php endif; ?>
                  <?php 
                    if( is_array($logIcon) ){
                      echo '<img src="'.$logIcon['url'].'" alt="'.$logIcon['alt'].'" title="'.$logIcon['title'].'">';
                    }
                  ?>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif;  wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>