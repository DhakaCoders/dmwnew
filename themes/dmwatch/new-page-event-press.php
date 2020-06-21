<?php 
/*
  Template Name: Event - Press
*/
get_header();
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-event-pp-report.jpg';


$bcontent = get_field('description', $thisID);
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event-pp-report" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <?php if( !empty($bcontent) ) echo wpautop($bcontent); ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="eventLinks">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="eventLinksstep1">
          <?php 
            $menuOptions = array( 
                'theme_location' => 'cbv_event_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
            wp_nav_menu( $menuOptions ); 
          ?>  
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-bg-gray event-pp-report-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>Press release </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Report</span></button>
        </div>
      </div>
      <div class="col-md-12">
        <div class="event-pp-report-page-tab-con-cntlr">
          <div id="tab-1" class="fl-tab-content current">
            <div class="event-pp-report-page-tab-con event-pp-report-page-tab-1-con">
              <div class="event-pp-report-page-tab-con-des">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
              <div class="event-pp-report-page-tab-1-grds">
                <ul class="clearfix reset-list">
                  <li>
                    <div class="event-pp-report-page-tab-1-grd">
                      <div class="epprpt-grd-fea-img">
                        <a href="#" class="overlay-link"></a>
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt-grd-fea-img-01.jpg);"></div>
                      </div>
                      <div class="mhc epprpt-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <p>Lorem Ipsum Executive Officer, ABD</p>
                        <a href="#">View Full <i></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-pp-report-page-tab-1-grd">
                      <div class="epprpt-grd-fea-img">
                        <a href="#" class="overlay-link"></a>
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt-grd-fea-img-02.jpg);"></div>
                      </div>
                      <div class="mhc epprpt-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <p>Lorem Ipsum Executive Officer, ABD</p>
                        <a href="#">View Full <i></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-pp-report-page-tab-1-grd">
                      <div class="epprpt-grd-fea-img">
                        <a href="#" class="overlay-link"></a>
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt-grd-fea-img-03.jpg);"></div>
                      </div>
                      <div class="mhc epprpt-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <p>Lorem Ipsum Executive Officer, ABD</p>
                        <a href="#">View Full <i></i></a>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="fl-see-all-btn">
                  <a href="#">SEE ALL</a>
                </div>
              </div>
              
            </div>
          </div>

          <div id="tab-2" class="fl-tab-content">
            <div class="event-pp-report-page-tab-con event-pp-report-page-tab-2-con">
              <div class="event-pp-report-page-tab-con-des">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
              <div class="event-pp-report-page-tab-2-grds">
                <ul class="clearfix reset-list">
                  <li>
                    <div class="event-pp-report-page-tab-2-grd">
                      <div class="epprpt2-grd-fea-img">
                        
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt2-grd-fea-img-01.jpg);">
                          <a href="#" class="overlay-link"></a>
                        </div>
                      </div>
                      <div class="epprpt2-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <strong>Lorem Ipsum Executive Officer, ABD</strong>
                        <p>Water, sanitation and hygiene are at the very core of sustainable development, Water scarcity. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-pp-report-page-tab-2-grd">
                      <div class="epprpt2-grd-fea-img">
                        
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt2-grd-fea-img-02.jpg);">
                          <a href="#" class="overlay-link"></a>
                        </div>
                      </div>
                      <div class="epprpt2-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <strong>Lorem Ipsum Executive Officer, ABD</strong>
                        <p>Water, sanitation and hygiene are at the very core of sustainable development, Water scarcity. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="event-pp-report-page-tab-2-grd">
                      <div class="epprpt2-grd-fea-img">
                        
                        <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/epprpt2-grd-fea-img-03.jpg);">
                          <a href="#" class="overlay-link"></a>
                        </div>
                      </div>
                      <div class="epprpt2-grd-des">
                        <span>JUNE  27, 2020</span>
                        <h4 class="epprpt-grd-des-title"><a href="#">Lorem Ipsum</a></h4>
                        <strong>Lorem Ipsum Executive Officer, ABD</strong>
                        <p>Water, sanitation and hygiene are at the very core of sustainable development, Water scarcity. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="fl-see-all-btn">
                  <a href="#">SEE ALL</a>
                </div>
              </div>
              
            </div>
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