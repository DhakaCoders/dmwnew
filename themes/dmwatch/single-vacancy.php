<?php
get_header();
$thisID = get_the_ID();
while( have_posts() ): the_post();
	$jobinfo = get_field('jobinfo');
?>

<section class="vacancy-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="vacancy-details-innr clearfix">
          <div class="vacancy-details-left">
            <ul class="reset-list">
              <li>DM WATCH</li>
<?php if( !empty( $jobinfo['job_location'] ) ) printf('<li>Job Location: %s</li>', $jobinfo['job_location']); ?>
<?php if( !empty( $jobinfo['no_of_vacancy'] ) ) printf('<li>No. of Vacancy: %s</li>', $jobinfo['no_of_vacancy']); ?>
<?php if( !empty( $jobinfo['position'] ) ) printf('<li>Position: %s</li>', $jobinfo['position']); ?>
<?php if( !empty( $jobinfo['oparations'] ) ) printf('<li>Operations: %s</li>', $jobinfo['oparations']); ?>
<?php if( !empty( $jobinfo['job_nature'] ) ) printf('<li>Job Nature: %s</li>', $jobinfo['job_nature']); ?>
<?php if( !empty( $jobinfo['salary_range'] ) ) printf('<li>Salary Range: %s</li>', $jobinfo['salary_range']); ?>
<?php if( !empty( $jobinfo['experience_requirements'] ) ) printf('<li>Experience Requirements: %s</li>', $jobinfo['experience_requirements']); ?>
<?php if( !empty( $jobinfo['application_deadline'] ) ) printf('<li>Application Deadline: %s</li>', $jobinfo['application_deadline']); ?>
            </ul>
          </div>
          <div class="vacancy-details-content">
<?php the_content(); ?>
            <div class="vacancy-link-items">
              <h5>DM WATCH</h5>
              <a href="javascript:void(0)">Shatabdi Haque Tower (3rd Floor), 586/3, Begum Rokeya Sharoni,<br>West Shewrapara, Mirpur, Dhaka-1216, Bangladesh
              </a>
              <ul class="reset-list clearfix vacancy-link-2nd-ul">
                <li><a href="javascript:void(0)">www.dmwatch-bd.com</a></li>
                <li><a href="mailto:info@dmwatch-bd.com">info@dmwatch-bd.com</a></li>
                <li><a href="tell:+88028090617">Phone: +88 02 8090617</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
endwhile;
get_template_part('templates/footer', 'top');
get_footer(); 
?>