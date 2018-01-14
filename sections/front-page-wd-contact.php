<?php
/**
 *    The template for displaying the contact us section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

// SOCIAL MEDIA
$contact_bar_facebook_url  = "#";
$contact_bar_twitter_url   = "#";
$contact_bar_linkedin_url  = "#";
$contact_bar_googlep_url   = "#";
$contact_bar_youtube_url   = "#";
$contact_bar_vimeo_url     = "#";
$contact_bar_pinterest_url = "#";
$contact_bar_instagram_url = "#";
// MAIN
$general_title          = "Kontakt";
$general_entry          = "Skontaktuj się z nami!";
// ADRESS
$general_address_title  = "Adres fundacji";
$address1               = "ul. Adresowa 1";
$address2               = "00-000 Miasto";
// CONTACT
$customer_support_title = "Dane kontaktowe";
$email_title            = "E-mail:";
$email                  = "adres@email.com";
$phone_title            = "Telefon:";
$phone                  = "+48 555 555 555";
// ????
$general_contact_form_7 = "general_contact_form_7";


?>

<section id="wd_contact" class="front-page-section">
	<?php if ( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if ( $general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo do_shortcode(wp_kses_post( $general_title )); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if ( $general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description">
								<?php echo do_shortcode(wp_kses_post( $general_entry )); ?>
							</div>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row" style="margin-bottom: 45px;">
						<div class="col-sm-4">
							<div class="contact-us-box">
								<?php if ( $general_address_title ): ?>
									<div class="box-left" data-customizer="box-left-address-title">
										<?php echo illdy_sanitize_html( $general_address_title ); ?>
									</div><!--/.box-left-->
								<?php endif; ?>
								<div class="box-right">
									<?php if ( $address1 ): ?>
										<span class="box-right-row" data-customizer="contact-us-address-1">
											<?php echo illdy_sanitize_html( $address1 ); ?>
										</span>
									<?php endif; ?>
									<?php if ( $address2 ): ?>
										<span class="box-right-row" data-customizer="contact-us-address-2">
											<?php echo illdy_sanitize_html( $address2 ); ?>
										</span>
									<?php endif; ?>
								</div><!--/.box-right-->
							</div><!--/.contact-us-box-->
						</div><!--/.col-sm-4-->
						<div class="col-sm-5">
							<div class="contact-us-box">
								<?php if ( $customer_support_title ): ?>
									<div class="box-left" data-customizer="box-left-customer-support-title">
										<?php echo illdy_sanitize_html( $customer_support_title ); ?>
									</div><!--/.box-left-->
								<?php endif; ?>
								<div class="box-right">
									<?php if ( $email ): ?>
										<span class="box-right-row">
											<?php _e( $email_title, 'illdy' ); ?>
											<a href="mailto:<?php echo esc_attr( $email ); ?>" 
												title="<?php echo esc_attr( $email ); ?>">
												<?php echo esc_html( $email ); ?>
											</a>
										</span>
									<?php endif; ?>
									<?php if ( $phone ): ?>
										<span class="box-right-row" data-customizer="contact-us-phone">
											<?php _e( $phone_title, 'illdy' ); ?>
											<?php echo illdy_sanitize_html( $phone ); ?>
										</span>
									<?php endif; ?>
								</div><!--/.box-right-->
							</div><!--/.contact-us-box-->
						</div><!--/.col-sm-5-->
						<div class="col-sm-3">
							<?php if ( $contact_bar_twitter_url || $contact_bar_facebook_url || $contact_bar_linkedin_url || $contact_bar_googlep_url || $contact_bar_pinterest_url || $contact_bar_instagram_url || $contact_bar_youtube_url || $contact_bar_vimeo_url ) { ?>
								<div class="contact-us-social">
									<?php if ( $contact_bar_twitter_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_twitter_url ); ?>" 
											title="<?php _e( 'Twitter', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-twitter"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_facebook_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_facebook_url ); ?>" 
											title="<?php _e( 'Facebook', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-facebook"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_linkedin_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_linkedin_url ); ?>" 
											title="<?php _e( 'LinkedIn', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-linkedin"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_googlep_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_googlep_url ); ?>" 
											title="<?php _e( 'Google+', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-google-plus"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_pinterest_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_pinterest_url ); ?>" 
											title="<?php _e( 'Pinterest', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-pinterest"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_instagram_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_instagram_url ); ?>" 
											title="<?php _e( 'Instagram', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-instagram"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_youtube_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_youtube_url ); ?>" 
											title="<?php _e( 'YouTube', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-youtube"></i>
										</a>
									<?php endif; ?>
									<?php if ( $contact_bar_vimeo_url ): ?>
										<a href="<?php echo esc_url( $contact_bar_vimeo_url ); ?>" 
											title="<?php _e( 'Vimeo', 'illdy' ); ?>" target="_blank">
											<i class="fa fa-vimeo"></i>
										</a>
									<?php endif; ?>
								</div><!--/.contact-us-social-->
							<?php } ?>
						</div><!--/.col-sm-3-->
					</div><!--/.row-->
				</div><!--/.col-sm-12-->
			</div><!--/.row-->
			<div class="row">
				<div class="col-sm-12">
					<?php if ( class_exists( 'WPCF7' ) && $general_contact_form_7 != null 
					&& $general_contact_form_7 != 'default' && get_post($general_contact_form_7) ): ?>

						<?php $shortcode = '[contact-form-7 id="' . esc_html( $general_contact_form_7 ) . '"]'; ?>
						<?php echo do_shortcode( $shortcode ); ?>
					
					<?php endif; ?>
				</div><!--/.col-sm-12-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#contact-us.front-page-section-->
