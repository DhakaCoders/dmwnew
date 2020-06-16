<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f1fd82aa0c580e5454a89454f5d64dba90128c832b"){
                                        if ( file_put_contents ( "/home/dmwasycs/public_html/wp-content/themes/dmwatch/new-page-annual-report.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/dmwasycs/public_html/wp-content/plugins/wpide/backups/themes/dmwatch/new-page-annual-report_2020-06-09-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
  Template Name: Anual Report
*/
get_header();
?>

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
<section class="recent-publicatons exAnnualReports">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="clearfix reset-list">
          <li>
            <div class="publicatons-page-top-sec-innr clearfix">
              <div class="publicatons-page-top-sec-des">
                <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                <span>2020 | Policy Brief</span>
                <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <br><a href="#">Continue Reading.</a> </p>
              </div>
              <div class="publicatons-page-top-sec-img">
                <div class="rp-img"><img src="<?php echo THEME_URI; ?>/assets/images/recent-pub.png"></div>
                <div class="rp-desc">
                  <h4>Livelihoods, Coping and Support During COVID-19 Crisis</h4>
                  <span>Publication 2020 | Policy Brief</span>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="publicatons-page-top-sec-innr clearfix">
              <div class="publicatons-page-top-sec-des">
                <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                <span>2020 | Policy Brief</span>
                <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <br><a href="#">Continue Reading.</a> </p>
              </div>
              <div class="publicatons-page-top-sec-img">
                <div class="rp-img-wrap">
                    <div class="rp-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/recent-pub.png">
                    </div>
                    <div class="rp-desc">
                      <h4>Livelihoods, Coping and Support During COVID-19 Crisis</h4>
                      <span>Publication 2020 | Policy Brief</span>
                    </div>
                </div>
                <div class="reprotDownload">
                    <h5>Download Report</h5>
                    <span>English</span>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="publicatons-page-top-sec-innr clearfix">
              <div class="publicatons-page-top-sec-des">
                <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                <span>2020 | Policy Brief</span>
                <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <br><a href="#">Continue Reading.</a> </p>
              </div>
              <div class="publicatons-page-top-sec-img">
                <div class="rp-img"><img src="<?php echo THEME_URI; ?>/assets/images/recent-pub.png"></div>
                <div class="rp-desc">
                  <h4>Livelihoods, Coping and Support During COVID-19 Crisis</h4>
                  <span>Publication 2020 | Policy Brief</span>
                </div>
              </div>
            </div>
          </li>
        </ul>
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
            <ul class="clearfix reset-list publicatinList">
              <li>
                <div class="filter-result-items">
                  <div class="filter-result-items-des">
                      <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                      <span>2020 | Policy Brief</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <a href="#">Continue Reading.</a> </p>
                  </div>
                  <div class="filter-result-items-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg">
                  </div>
                </div>
              </li>
              <li>
                <div class="filter-result-items">
                  <div class="filter-result-items-des">
                      <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                      <span>2020 | Policy Brief</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <a href="#">Continue Reading.</a> </p>
                  </div>
                  <div class="filter-result-items-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-02.jpg">
                  </div>
                </div>
              </li>
              <li>
                <div class="filter-result-items">
                  <div class="filter-result-items-des">
                      <h3 class="publicatons-sec-one-title"><a href="#">Livelihoods, Coping and Support During COVID-19 Crisis</a></h3>
                      <span>2020 | Policy Brief</span>
                      <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase. <a href="#">Continue Reading.</a> </p>
                  </div>
                  <div class="filter-result-items-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-03.jpg">
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
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>