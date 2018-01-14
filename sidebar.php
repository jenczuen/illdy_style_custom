<?php
/**
 *	The template for dispalying the sidebar.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<div class="col-sm-4">
	<div id="sidebar">
		<?php

			$the_widget_args = array(
				'before_widget'	=> '<div class="widget">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<div class="widget-title"><h5>',
				'after_title'	=> '</h5></div>'
			);

			the_widget( 'WP_Widget_Search', 'title=' . __( 'Szukaj', 'illdy' ), $the_widget_args );
			the_widget( 'WP_Widget_Categories', 'title=' . __( 'Kategorie', 'illdy' ), $the_widget_args );
			the_widget( 'WP_Widget_Archives', 'title=' . __( 'Archiwa', 'illdy' ), $the_widget_args );

/*
		if( is_active_sidebar( 'blog-sidebar' ) ):
			dynamic_sidebar( 'blog-sidebar' );
		else:
			$the_widget_args = array(
				'before_widget'	=> '<div class="widget">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<div class="widget-title"><h3>',
				'after_title'	=> '</h5></div>'
			);

			the_widget( 'WP_Widget_Categories', 'title=' . __( 'Categories', 'illdy' ), $the_widget_args );
			the_widget( 'WP_Widget_Archives', 'title=' . __( 'Archive', 'illdy' ), $the_widget_args );
		endif;
*/		
		?>
	</div><!--/#sidebar-->
</div><!--/.col-sm-4-->
