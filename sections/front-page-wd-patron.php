<?php
/**
 *	The template for displaying the testimonials section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$general_title = get_theme_mod( 'illdy_testimonials_general_title', __( 'Testimonials', 'illdy' ) );
	$general_background_image = get_theme_mod( 'illdy_testimonials_general_background_image', '' );
	$number_of_posts = get_theme_mod( 'illdy_testimonials_number_of_posts', absint( 4 ) );
}else{
	$general_title = get_theme_mod( 'illdy_testimonials_general_title' );
	$general_background_image = get_theme_mod( 'illdy_testimonials_general_background_image' );
	$number_of_posts = get_theme_mod( 'illdy_testimonials_number_of_posts', absint( 4 ) );	
}

$jetpack_testimonial_query_args = array (
	'post_type'					=> array( 'jetpack-testimonial' ),
	'nopaging'					=> false,
	'ignore_sticky_posts'		=> true,
	'posts_per_page'			=> absint( $number_of_posts ),
	'cache_results'				=> true,
	'update_post_meta_cache'	=> true,
	'update_post_term_cache'	=> true
);

$jetpack_testimonial_query = new WP_Query( $jetpack_testimonial_query_args );


$general_title = "Patron";
$general_background_image = get_template_directory_uri() . '/layout/images/patron_background.png';
$patron_head_image = get_template_directory_uri() . '/layout/images/patron_head.png';
$patron_name = "Paweł Włodkowic";
$general_desc = "Awesome theme with great design and helpfull support. If you do not know how to code your own WordPress theme, but you still want a good-looking website for your business, Illdy might be exactly what you need. It is a slick theme with a lot of of features to choose from. You can customize whatever section you  want and you can rest assure that no matter what device your website is viewed on it looks  great.";
?>



<?php if ( $general_title != '' || $jetpack_testimonial_query->have_posts() ) { ?>

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

<?php } ?>

