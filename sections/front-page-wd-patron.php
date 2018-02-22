<?php
/**
 *	The template for displaying the testimonials section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php

$general_title = "Patron";
$general_background_image = get_template_directory_uri() . '/layout/images/patron_background.png';
$patron_head_image = get_template_directory_uri() . '/layout/images/patron_head.png';
$patron_name = "Paweł Włodkowic";
$general_desc = "cytat";
?>

<section id="wd_patron" class="front-page-section" style="<?php if( $general_background_image ): echo 'background-image: url('. esc_url( $general_background_image ) .')'; endif; ?>">

<!--
<section id="wd_patron" class="front-page-section" style="<?php echo 'padding-top: 130px;'; ?>">
	<h1>wd_patron</h1>
</section>
-->

	<?php if( $general_title ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3><?php echo do_shortcode(wp_kses_post( $general_title )); ?></h3>
					</div><!--/.col-sm-12-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>

		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 no-padding">
						<div class="testimonials-carousel owl-carousel-enabled">
							<div class="carousel-testimonial">
								<div class="testimonial-image">
									<img src="<?php echo $patron_head_image; ?>" 
										alt="<?php _e( $patron_name, 'illdy' ); ?>" 
										title="<?php _e( $patron_name, 'illdy' ); ?>" />
								</div><!--/.testimonial-image-->
								<div class="testimonial-content">
									<blockquote><q><?php _e( $general_desc, 'illdy' ); ?></q></blockquote>
								</div><!--/.testimonial-content-->
								<div class="testimonial-meta">
									<?php _e( $patron_name, 'illdy' ); ?>
								</div><!--/.testimonial-meta-->
							</div><!--/.carousel-testimonial-->
						</div><!--/.testimonials-carousel.owl-carousel-enabled-->
					</div><!--/.col-sm-10.col-sm-offset-1.no-padding-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-content-->

</section><!--/#testimonials.front-page-section-->


