<?php
/**
 *    The template for dispalying the index.
 *
 * @package    WordPress
 * @subpackage illdy

 */
?>
<?php get_header(); ?>
	<div class="container">
		<div class="row">

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
				<div class="col-sm-8">
			<?php } else { ?>
				<div class="col-sm-8 col-sm-offset-2">
			<?php } ?>
			
					<section id="blog">
						<?php do_action( 'illdy_above_content_after_header' ); ?>
						<?php
							if ( have_posts() ):
								while ( have_posts() ):
									the_post();
									get_template_part( 'template-parts/content', get_post_format() );
								endwhile;
								wp_reset_query();
							else:
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
						<?php do_action( 'illdy_after_content_above_footer' ); ?>
					</section><!--/#blog-->

				</div><!--/.col-sm-7/12-->

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
				<div class="col-sm-4">
					<div id="sidebar">
						<?php 
							//dynamic_sidebar( 'blog-sidebar' ); 
							$the_widget_args = array(
								'before_widget'	=> '<div class="widget">',
								'after_widget'	=> '</div>',
								'before_title'	=> '<div class="widget-title"><h5>',
								'after_title'	=> '</h5></div>'
							);

							the_widget( 'WP_Widget_Search', 'title=' . __( 'Szukaj', 'illdy' ), $the_widget_args );
							the_widget( 'WP_Widget_Categories', 'title=' . __( 'Kategorie', 'illdy' ), $the_widget_args );
							the_widget( 'WP_Widget_Archives', 'title=' . __( 'Archiwa', 'illdy' ), $the_widget_args );
						?>
					</div>
				</div>
			<?php } ?>

		</div><!--/.row-->
	</div><!--/.container-->
<?php get_footer(); ?>