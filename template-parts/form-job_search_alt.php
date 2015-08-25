<?php
/**
 * Template Part Name : Job Search Form
 *
 * @package WordPress
 * @subpackage Job_Board
 * @since Job Board 1.0
 *
 */


?>
<div class="jobboard-search-wrapper">
	<div class="container">
	<div id="jobboard-search-tab">
		<ul class="jobboard-tab-nav">
			<li><a href="#job-search-tab"><?php _e( 'Find a Job', 'jobboard-child');?></a></li>
			<li><a href="#resume-search-tab"><?php _e( 'Find Resume', 'jobboard-child');?></a></li>
		</ul>
		<div id="job-search-tab">
			<?php get_template_part( 'template-parts/alt', 'search_job' ); ?>
		</div>
		<div id="resume-search-tab">
			<?php get_template_part( 'template-parts/alt', 'search_resume' ); ?>
		</div>
	</div>
	</div><!-- .container -->
</div><!-- .jobboard-search-wrapper -->


