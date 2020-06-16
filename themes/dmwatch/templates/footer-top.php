<?php 
$showhidecont = get_field('showhidecont', 'options'); 
if($showhidecont):
  $contact = get_field('contactus', 'options');
  if( $contact ):
?>
<section class="footer-top-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-top-sec-inr clearfix">
          <div class="ftr-top-sec-title">
            <?php if(!empty($contact['title'])) printf('<h2 class="ftr-top-title">%s</h2>', $contact['title']); ?>
          </div>
          <div class="ftr-top-sec-link">
            <?php 
              $link = $contact['link'];
              if( is_array( $link ) &&  !empty( $link['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $link['url'], $link['target'], $link['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>