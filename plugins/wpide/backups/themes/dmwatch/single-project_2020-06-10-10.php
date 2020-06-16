<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f1fd82aa0c580e5454a89454f5d64dba1c10aad0bd"){
                                        if ( file_put_contents ( "/home/dmwasycs/public_html/wp-content/themes/dmwatch/single-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/dmwasycs/public_html/wp-content/plugins/wpide/backups/themes/dmwatch/single-project_2020-06-10-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
get_header();

$thisID = get_the_ID();
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-an-our-project-details.jpg';


$details = get_field('description', $thisID);

$client = get_field('clientinfo', $thisID);

$banner = get_field('bannercont', $thisID);
?>

<section class="page-banner page-bnr-lft-con page-bnr-an-our-project-details" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <?php 
            if( !empty($banner['title']) ) printf('<h1 class="page-banner-title">%s</h1>', $banner['title'] );
            if(!empty($banner['description'])) echo wpautop( $banner['description'] ); 
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php if(!empty( $banner['logo'] )): ?>
  <div class="page-bnr-btm-logo">
    <?php echo cbv_get_image_tag( $banner['logo'] ); ?>
  </div>
  <?php endif; ?>

</section><!-- end of page-banner -->

<?php $intro = get_field('introsec', $thisID); ?>
<section class="dm-project-info-sec-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="dm-project-info-wrp">
            <div class="dm-project-info-inr clearfix">
              <div class="dm-project-info-lft">

                <?php if( $intro ): ?>
                <div class="dm-project-info-lft-img">
                <?php if( !empty($intro['image']) ): ?>
                <div class="dm-project-info-lft-img" data-fancybox="gallery" href="<?php echo cbv_get_image_src( $intro['image'] ); ?>">
                  <?php echo cbv_get_image_tag( $intro['image'], 'projectsingle' ); ?>
                </div>
                <?php endif; ?>
                <?php
                $galleries = $intro['gallery']; 
                if($galleries): 
                ?>
                <div class="dm-thumb-images clearfix">
                  <?php foreach( $galleries as $gallery ): ?>
                  <div class="dm-thumb-img">
                    <?php if( !empty($gallery['id']) ): ?>
                    <div data-fancybox="gallery" href="<?php echo cbv_get_image_src( $gallery['id'] ); ?>">
                      <?php echo cbv_get_image_tag( $gallery['id'], 'projectthumb' ); ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                </div>
                <?php endif; ?>
              </div>
              <div class="dm-project-info-rgt-dsc">
                <h2 class="dm-info-dsc-title">PROJECT INFORMATION</h2>
                <h4 class="dm-info-dsc-title-1">TITLE:</h4>
                <p><?php the_title(); ?></p>
                <h4 class="dm-info-dsc-title-1">CLIENT:</h4>
                <?php if( !empty($client['name']) ) printf('<span>%s</span>', $client['name']); ?>
                <?php if( !empty($client['logo']) ): ?>
                <div class="dm-project-info-logo">
                  <?php echo cbv_get_image_tag($client['logo']); ?>
                </div>
                <?php else: ?>
                <div class="dm-project-info-logo">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-project-info-logo-img.png">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="dm-project-info-btm-dsc">
              <h4 class="dm-project-info-btm-dsc-title">PROJECT DESCRIPTION:</h4>
              <?php if( !empty($details) ) echo wpautop($details); ?>
              <a href="<?php echo esc_url( home_url('project') );?>" >BACK TO THE PORTFOLIO</a>
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