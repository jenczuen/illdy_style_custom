<?php
/**
 *	The template for dispalying the team section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>

<?php

$title = "Partnerzy";
$desc = "Instytucje, które współpracowały z naszym instytutem:";
$sidebar_id = "front-page-wd-partners-sidebar";

if( is_active_sidebar( $sidebar_id ) ):
?>

<section id="wd_partners" class="front-page-section">

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
					dynamic_sidebar( $sidebar_id );
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->

</section><!--/#team.front-page-section-->

<?php endif; ?>



