<?php 
/*
  Template Name: Anual Report
*/
get_header();
?>
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
          <h2 class="opfhdr-title">Filter Annual Reports</h2>
        </div>
        <div class="our-project-filter-btns">
          <form action="" method="get">
          <ul class="reset-list clearfix">
            <?php 
            $types = get_terms( array(
              'taxonomy' => 'report_type',
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
              'taxonomy' => 'report_year',
              'hide_empty' => false,
              'parent' => 0
            ) );
            ?>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>YEAR</span></button></div>
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
          </ul>
          <div class="search-filter-btn">
            <button>FILTER NOW</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="recent-publicatons exAnnualReports">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( !empty($ptype) OR !empty($pyears) ): ?>
        <div class="filter-result-hedding">
            <h2 class="opfhdr-title">FILTER RESULT</h2>
        </div>
        <span id="filter" data-type="<?php echo $ptype; ?>" data-year="<?php echo $pyears; ?>" style="display: none;"></span>
        <?php endif; ?>
        <?php echo do_shortcode('[ajax_search_posts]'); ?>
      </div>
    </div>
  </div>
</section>
<?php 
$thisID = get_the_ID();
$bcontent = get_field('description', $thisID);

?>
<section class="annualReports">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="annualReportsHdr">
            <h2 class="opfhdr-title">Annual Reports</h2>
            <?php if( !empty($bcontent) ) echo wpautop($bcontent); ?>
        </div>
        <?php echo do_shortcode('[ajax_report_posts]'); ?>
      </div>
    </div>
  </div>
</section>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>