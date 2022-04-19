<?php
/* Template Name: Liên hệ */
get_header(); ?>

<?php get_template_part('template-parts/header/header', 'page-title-area');?>

<section id="contact-design-content" class="tpl-content">
   <?php
	while ( have_posts() ) : the_post();
		?>
        <!--.contact-info-area-->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                  	<?php 
					$contact_address_title = hl_get_field('contact_address_title');
					$contact_address = hl_get_field('contact_address');
					?>
                    <div class="contact-info-box">
                      <div class="back-icon"> <i class="bx bx-map"></i> </div>
                      <div class="icon"> <i class="bx bx-map"></i> </div>
                      <h3><?=$contact_address_title?></h3>
                      <p><?=$contact_address?></p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                      <div class="back-icon"> <i class="bx bx-phone-call"></i> </div>
                      <div class="icon"> <i class="bx bx-phone-call"></i> </div>
                      <?php 
						$contact_info_title = hl_get_field('contact_info_title');
						$contact_info_phone = hl_get_field('contact_info_phone');
						$contact_info_email = hl_get_field('contact_info_email');
						?>
                      <h3><?=$contact_info_title?></h3>
                      <p>Mobile: <a href="tel:<?=$contact_info_phone?>"><?=$contact_info_phone?></a></p>
                      <p>E-mail: <a href="mailto:<?=$contact_info_email?>"><?=$contact_info_email?></a></p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                      <div class="back-icon"> <i class="bx bx-time-five"></i> </div>
                      <div class="icon"> <i class="bx bx-time-five"></i> </div>
                      <?php 
						$contact_open_title = hl_get_field('contact_open_title');
						$contact_open_line1 = hl_get_field('contact_open_line1');
						$contact_open_line2 = hl_get_field('contact_open_line2');
						?>
                      <h3><?=$contact_open_title?></h3>
                      <p><?=$contact_open_line1?></p>
                      <p><?=$contact_open_line2?></p>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        
        <!--.contact-area-->
        <section class="contact-area pb-100">
          <div class="container">
          	<?php 
			$contact_form_title_small = hl_get_field('contact_form_title_small');
			$contact_form_title = hl_get_field('contact_form_title');
			$contact_form_des = hl_get_field('contact_form_des');
			?>
            <div class="section-title"> <span class="sub-title"><?=$contact_form_title_small?></span>
              <h2><?=$contact_form_title?><span class="overlay"></span></h2>
              <p><?=$contact_form_des?></p>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12">
              	<?php 
				$attachment_id = hl_get_field('contact_form_img');
				$attachment_url = wp_get_attachment_url( $attachment_id );
				?>
                <div class="contact-image" data-tilt=""> <img src="<?php echo $attachment_url;?>" alt="hien dev"> </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                 	<?php 
					$contact_form_id = hl_get_field('contact_form_id');
					echo do_shortcode('[contact-form-7 id="'.$contact_form_id.'" title="Form trang liên hệ"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!--.contact-google map-->
       	<?php $contact_google_map = hl_get_field('contact_google_map');?>
        <div id="map"><?php echo $contact_google_map;?></div>
        
        <?php
	endwhile; // End of the loop.
	?>
</section>
<?php get_footer();