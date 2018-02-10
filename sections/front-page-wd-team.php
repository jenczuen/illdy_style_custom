<?php
/**
 *	The template for dispalying the team section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>


<section id="wd_team" class="front-page-section">

	<?php 
		get_template_part( 'sections/front-page', 'wd-team-council' );
		get_template_part( 'sections/front-page', 'wd-team-management' );
		get_template_part( 'sections/front-page', 'wd-team-coworkers' );
	?>

</section><!--/#team.front-page-section-->



