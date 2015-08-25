<?php
/**
 * Template Part Name : Job Stats
 *
 * @since 1.0.0
 *
 */
?>

<div id="job-stats-alt">
	<div class="container">
		<h1 class="job-stats-title"><?php echo apply_filters( 'jobboard_job_stats_title', jobboard_option('job_status_title') ); ?></h1>
		<p class="job-stats-desc">
			<?php echo esc_attr( jobboard_option('job_status_description') ); ?>
		</p>
		<div class="job-stats-wrapper row">
			<div class="col-lg-3">
				<div class="the-countbox">
					<div class="count-box">
					<?php
						$job['jobs'] = wp_count_posts( 'job' );
						echo $job['jobs']->publish;
					?>
					</div><!-- /.count-box -->
					<div class="count-text">
					<?php
						echo apply_filters( 'jobboard_job_posted_text', _n( 'Job Posted', 'Jobs Posted', $job['jobs']->publish, 'jobboard' ) );
					?>
					</div><!-- /.count-text -->
				</div><!-- .the-countbox -->
			</div> <!-- /.col-lg-2 col-lg-offset-2 col-md-3" -->
			<div class="col-lg-3">
				<div class="the-countbox">
					<div class="count-box">
					<?php
						$job['pos'] = wp_count_terms( 'job_category', array( 'hide_empty' => true ) );
						echo esc_attr( $job['pos'] );
					?>
					</div><!-- /.count-box -->
					<div class="count-text">
					<?php
						echo apply_filters( 'jobboard_job_position_text', _n( 'Position Filled', 'Positions Filled', $job['pos'], 'jobboard' ) );
					?>
					</div><!-- /.count-text -->
				</div><!-- .the-countbox -->
			</div><!-- /.col-lg-2 -->
			<div class="col-lg-3">
				<div class="the-countbox">
					<div class="count-box">
					<?php
						$job['comp'] = wp_count_posts( 'company' );
						echo esc_attr( $job['comp']->publish );
					?>
					</div><!-- /.count-box -->
					<div class="count-text">
					<?php
						echo apply_filters( 'jobboard_job_company_text', _n( 'Company', 'Companies', $job['comp']->publish, 'jobboard' ) );
					?>
					</div><!-- /.count-text -->
				</div><!-- .the-countbox -->
			</div><!-- /.col-lg-2 -->
			<div class="col-lg-3">
				<div class="the-countbox">
					<div class="count-box">
					<?php
						$job_user = count_users();
						echo esc_attr( $job_user['total_users'] );

					?>
					</div><!-- /.count-box -->
					<div class="count-text">
					<?php
						echo apply_filters( 'jobboard_job_member_text', _n( 'Member', 'Members', $job_user['total_users'], 'jobboard' ) );
					?>
					</div><!-- /.count-text -->
				</div><!-- .the-countbox -->
			</div><!-- /.col-lg-2 -->
		</div><!-- /.job-stats-wrapper -->
	</div><!-- /.container -->
</div><!-- /#job-stats -->
