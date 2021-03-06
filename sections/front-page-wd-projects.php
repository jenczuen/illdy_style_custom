<?php
/**
 *    The template for displaying the latest news section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

$blog_page_id = get_option( 'page_for_posts' );

$number_of_posts = 3;
$number_of_words = 20;
$general_title = "Projekty";
$general_entry = "Tutaj będą pojawiać się projekty";

$post_query_args = array(
	'category_name'          => 'projects',
	'post_type'              => array( 'post' ),
	'nopaging'               => false,
	'posts_per_page'         => absint( $number_of_posts ),
	'ignore_sticky_posts'    => true,
	'cache_results'          => true,
	'update_post_meta_cache' => true,
	'update_post_term_cache' => true,
);

$post_query = new WP_Query( $post_query_args );

$read_more = "Czytaj dalej...";
$button_text = "Zobacz wszystkie projekty";
$button_url = home_url() . "/index.php/category/projects/";

if ( $post_query->have_posts()) {

	?>

	<section id="wd_projects" class="front-page-section wd_posts_view">
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

		<?php if ( $post_query->have_posts() ): ?>
			<div class="section-content">
				<div class="container">
					<div class="row blog-carousel">
						<?php $counter = 0; ?>
						<?php while ( $post_query->have_posts() ): ?>

							<?php $post_query->the_post(); ?>
							<?php $post_thumbnail = wp_get_attachment_image_src( 
								get_post_thumbnail_id( $post->ID ), 
								'illdy-front-page-latest-news' ); 
							?>

							<div class="illdy-blog-post col-md-4 col-sm-6 col-xs-12">

								<div class="post" style="<?php 
									if ( ! $post_thumbnail && 
											!get_theme_mod( 'illdy_disable_random_featured_image' ) ): 
										echo 'padding-top: 40px;'; 
									endif; ?>"
								>

									<a class="post-block-link" href="<?php the_permalink(); ?>" 
										title="<?php the_title(); ?>">
										<span class="post-block-link-span"></span>
									</a>

									<?php if ( has_post_thumbnail() ){ ?>

										<div class="post-image" style="background-image: url('<?php echo esc_url( $post_thumbnail[0] ); ?>');"></div>

									<?php }elseif ( get_theme_mod( 'illdy_disable_random_featured_image' ) ) { ?>

										<div class="post-image"  style="background-image: url('<?php echo illdy_get_random_featured_image(); ?>');"></div><!--/.blog-post-image-->

									<?php } ?>

									<h5>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-title">
											<?php the_title(); ?>
										</a>
									</h5>
									<div class="post-entry">
										<?php echo wp_trim_words( get_the_content(), $number_of_words ); ?>
									</div><!--/.post-entry-->
									<a href="<?php the_permalink(); ?>" title="<?php _e( $read_more, 'illdy' ); ?>" class="post-button">
										<i class="fa fa-chevron-circle-right"></i>
										<?php _e( $read_more, 'illdy' ); ?>
									</a>
								</div><!--/.post-->
							</div><!--/.col-sm-4-->
							<?php $counter ++; ?>
						<?php endwhile; ?>
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.section-content-->
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

		<a 
			href="<?php echo esc_url( $button_url ); ?>" 
			title="<?php echo esc_attr( $button_text ); ?>" 
			class="latest-news-button">
				<i class="fa fa-chevron-circle-right"></i>
				<?php echo esc_html( $button_text ); ?>
		</a>

	</section>

<?php } ?>