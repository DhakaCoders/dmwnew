<?php
get_header();
$thisID = get_the_ID();
while( have_posts() ): the_post();
	$fimgID = get_post_thumbnail_id();
	$imgsrc = cbv_get_image_src($fimgID);
	$bannerImgId = get_field('banner_image');
	$bannerImgSrc = cbv_get_image_src($bannerImgId);
	$banner_title = get_field('banner_title');
	$banner_description = get_field('banner_description');
?>

<section class="vacancy-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="vacancy-details-innr clearfix">
          <div class="vacancy-details-left">
            <ul class="reset-list">
              <li>DM WATCH</li>
              <li>Job Location: Shewrapara, Dhaka</li>
              <li>No. of Vacancy: 01</li>
              <li>Position: Senior Officer - Finance and</li>
              <li>Operations</li>
              <li>Job Nature: Full time</li>
              <li>Salary Range: BDT 35,000–60,000</li>
              <li>Experience Requirements: 3 to 4 year(s)</li>
              <li>Application Deadline: April 25, 2020</li>
            </ul>
          </div>
          <div class="vacancy-details-content">
            <h3>Vacancy Announcement</h3>
              <h4>Job Context</h4>
              <p>In an era of globalization, countries now function as cities. Interconnected countries and interwoven sectors have created a complex new world. A small change in any part of the world can impact the world in infinite ways. A multi-disciplinary approach is, thus, necessary to address these complex intertwined issues. Disaster Management Watch (DM WATCH) fits into that complex framework with multi-disciplinary approach and expertise.</p>
              <p>DM WATCH was established in 2013 as a Research, Training and Consultancy firm with a multi-disciplinary group of professionals. DM WATCH has worked with a broad range of partners at regional and country levels. Our clients include, among many, UNDP, World Bank, SNV Netherlands Development Organisation, Bernard Van Leer Foundation, BNWLA, BRAC University, CARE Bangladesh, 
              </p>
              <h4>Job Responsibilities:</h4>
              <ul class="reset-list">
                <li>-Prepare budget and cash call on a regular basis. Segregate the budget considering different requirements</li>
                <li>-Prepare procurement and expenditure plan for the smooth project implementation based on approved work-plan and budget</li>
                <li>-Review/check expenses (bill/vouchers) of project staff. Also ensure appropriate charging of these expenses</li>
                <li>-Monitor expenses of project activities and provide feedback to project management</li>
                <li>-Maintain salary sheet for every employee and prepare financial reports</li>
                <li>-Collect bill from vendor and submit to appropriate authority with necessary attachments</li>
                <li>-Keep all the computerized financial documents/formats updated</li>
              </ul>
              <h4>Educational Requirements:</h4>
              <p>Bachelor of Commerce in Accounting/ Finance/ HRM or Masters of Business Administration (MBA) in Accounting/ Finance/ HRM or any other relevant degree from relevant subjects from any reputed university/institution</p>
              <h4>Experience Requirements</h4>
              <p>Minimum 3 years of experience in accounts and HR/ admin
              Working experience in any research/ consulting firm in the accounting/ finance/ HR and admin department is preferable
              </p>
              <h4>Required Skills</h4>
              <p>Good communication skill both in Bangla and English
              Sound knowledge in debit and credit management
              Sound knowledge on MS Excel, MS Word, MS Access, and other accounting software
              Willingness to work under pressure and meet deadlines
              </p>
              <h4>Compensation and other benefits
              </h4>
              <p>Festival bonus,Insurance, Profit share, Weekly 2 holidays, Mdical leave, Annual leave, Maternal/ Paternal leave
              Early Applicant will get priority in case of short screening. Only shortlisted candidates will be communicated for interview as per requirement process. DM WATCH reserves the right to accept or reject any application without assigning any reasons whatsoever.
              </p>
              <h4>Application Procedure
              </h4>
              <p>If you are interested to be a part of this diversified DM WATCH family, then please fill up the Google form link attached herewith (without filling the Google form, applications will not be accepted).</p>
              <p><a href="#"><span>LINK:</span> https://forms.gle/6sZyfw8xUVguXsXa9</a></p>
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