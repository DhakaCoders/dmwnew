<?php 
/*
  Template Name: Events
*/
get_header();
?>

<section class="page-banner page-bnr-rgt-con page-bnr-event" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/page-bnr-event.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">EVENT</h1>
          <p>Water, sanitation and hygiene are at the very core of sustainable development,<br> crucial for survival of people and the planet. </p>
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
            <li class="active"><a href="#">Events</a></li>
            <li><a href="/events/media/">Media</a></li>
            <li><a href="/events/press/">Press</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-bg-gray event-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix fl-tabs-2">
          <button class="tab-link current" data-tab="tab-1"><span>Upcoming Events </span></button>
          <button class="tab-link" data-tab="tab-2"><span>Past Event</span></button>
        </div>
      </div>
      <div class="col-md-12">
        <div class="event-page-sec-tab-con">
           <div id="tab-1" class="fl-tab-content current">
              <div class="upcoming-event-con clearfix">
                <div class="upcoming-event-con-lft">
                  <div class="upcoming-event-fea-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/upcoming-event-fea-img.jpg);">
                    <div class="upcoming-event-fea-img-hover-con">
                      <strong>JUNE  27, 2020</strong> 
                      <p>Lorem Ipsum is simply dummy text</p>
                      <div class="timer">
                        <img src="<?php echo THEME_URI; ?>/assets/images/timer.png">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="upcoming-event-con-rgt">
                  <strong>January 27, 2020</strong>
                  <h3 class="uec-title">Lorem Ipsum is simply dummy text</h3>
                  <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Unknown printer took a galley of type and scrambled it to m  <a href="#">Continue Reading.</a> </p>
                </div>
              </div>
           </div>
          <div id="tab-2" class="fl-tab-content">
            <div class="past-event-con">
              <div class="past-event-item-row">
                <div class="past-event-date">
                  <strong>25</strong>
                  <span>MAY 20</span>
                </div>
                <div class="past-event-item-row-des">
                  <h3 class="peird-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                  <span>2020 | Policy Brief</span>
                  <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the  to is crucial for survival of people anitation and hygiene  <a href="#">Continue Reading.</a> </p>
                </div>
              </div>
              <div class="past-event-item-row">
                <div class="past-event-date">
                  <strong>20</strong>
                  <span>feb 20</span>
                </div>
                <div class="past-event-item-row-des">
                  <h3 class="peird-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                  <span>2020 | Policy Brief</span>
                  <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the  to is crucial for survival of people anitation and hygiene  <a href="#">Continue Reading.</a> </p>
                </div>
              </div>
              <div class="past-event-item-row">
                <div class="past-event-date">
                  <strong>02</strong>
                  <span>dec 19</span>
                </div>
                <div class="past-event-item-row-des">
                  <h3 class="peird-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                  <span>2020 | Policy Brief</span>
                  <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the  to is crucial for survival of people anitation and hygiene  <a href="#">Continue Reading.</a> </p>
                </div>
              </div>
              <div class="past-event-item-row">
                <div class="past-event-date">
                  <strong>02</strong>
                  <span>nov 19</span>
                </div>
                <div class="past-event-item-row-des">
                  <h3 class="peird-title"><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                  <span>2020 | Policy Brief</span>
                  <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the  to is crucial for survival of people anitation and hygiene  <a href="#">Continue Reading.</a> </p>
                </div>
              </div>

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