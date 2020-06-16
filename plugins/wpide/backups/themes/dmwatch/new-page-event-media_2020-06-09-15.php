<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f1fd82aa0c580e5454a89454f5d64dba90128c832b"){
                                        if ( file_put_contents ( "/home/dmwasycs/public_html/wp-content/themes/dmwatch/new-page-event-media.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/dmwasycs/public_html/wp-content/plugins/wpide/backups/themes/dmwatch/new-page-event-media_2020-06-09-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
  Template Name: Events - Media
*/
get_header();
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event-media" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/page-bnr-event-media.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">NEWS</h1>
          <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial<br> for survival of people and the planet. </p>
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
          <ul>
            <li><a href="/events/">Events</a></li>
            <li class="active"><a href="#">Media</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-bg-gray event-media-page-tab-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>News </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Oped (media)</span></button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="event-media-page-tab-con">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="event-media-page-tab-con-inr">
          <div id="tab-1" class="fl-tab-content current">
            <div class="event-media-page-tab-con-cntlr emptc-tab-1-cntlr">
              <ul class="clearfix reset-list">
                <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-01.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-02.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">বাংলাদেশের উন্নয়ন</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-01.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="fl-see-all-btn">
                <a href="#">SEE ALL</a>
              </div>
            </div>
          </div>
           <div id="tab-2" class="fl-tab-content">
            <div class="event-media-page-tab-con-cntlr emptc-tab-2-cntlr">
              <ul class="clearfix reset-list">
                <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-01.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-02.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">বাংলাদেশের উন্নয়ন</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="event-media-page-tab-con-row clearfix">
                    <div class="event-media-page-tab-con-fea-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/event-media-page-tab-con-fea-img-01.jpg">
                    </div>
                    <div class="event-media-page-tab-con-des">
                      <h3 class="emptcd-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                      <span>Reporter | 2020 | The Daily Star</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
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
</section>



<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>