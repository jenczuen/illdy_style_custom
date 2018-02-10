<?php

$title = "Zarząd";
$desc = "Członkowie zarzadu naszej fundacji:";
$sidebar_id = "front-page-wd-team-management-sidebar";

?>


	<?php if( $title || $desc ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $title ): ?>
						<div class="col-sm-12">
							<h3><?php echo do_shortcode(wp_kses_post( $title )); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $desc ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description"><?php echo do_shortcode(wp_kses_post( $desc )); ?></div>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>


	<div class="section-content">
		<div class="container">
			<div class="row inline-columns">
				<?php
				if( is_active_sidebar( $sidebar_id ) ):
					dynamic_sidebar( $sidebar_id );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->

