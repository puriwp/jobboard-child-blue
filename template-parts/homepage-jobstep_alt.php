<?php
/**
 * Template Part Name : Job Step
 *
 * @package WordPress
 * @subpackage Job_Board
 * @since Job Board 1.0
 *
 */
?>

<div id="job-step">
	<div class="container">
		<h1 class="job-step-title">
		<?php echo apply_filters( 'jobboard_job_step_title', jobboard_option('job_steps_title') ); ?>
		</h1>
		<p class="job-step-desc">
			<?php echo esc_attr( jobboard_option('job_steps_description') ); ?>
		</p>
		<div class="job-step-wrapper row">
			<div class="col-sm-3">
				<div class="step-number"><?php echo apply_filters( 'jobboard_step_number_one', jobboard_option( 'step_1_label' ) ); ?></div>
				<div class="step-image"><img src="<?php echo esc_url( jobboard_option( 'step_1_image' ) ); ?>" alt="<?php echo esc_attr( jobboard_option( 'step_1_label' ) ); ?>" title="<?php echo esc_attr( jobboard_option( 'step_1_title' ) ); ?>" /></div><!-- /.step-image -->
				<h3 class="step-title"><?php echo apply_filters( 'jobboard_step_title_one', jobboard_option( 'step_1_title' ) ); ?></h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number"><?php echo apply_filters( 'jobboard_step_number_two', jobboard_option( 'step_2_label' ) ); ?></div>
				<div class="step-image"><img src="<?php echo esc_url( jobboard_option( 'step_2_image' ) ) ?>" alt="<?php echo esc_attr( jobboard_option( 'step_2_label' ) ); ?>" title="<?php echo esc_attr( jobboard_option( 'step_2_title' ) ); ?>" /></div><!-- /.step-image -->
				<h3 class="step-title"><?php echo apply_filters( 'jobboard_step_title_two', jobboard_option( 'step_2_title' ) ); ?></h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number"><?php echo apply_filters( 'jobboard_step_number_three', jobboard_option( 'step_3_label' ) ); ?></div>
				<div class="step-image"><img src="<?php echo esc_url( jobboard_option( 'step_3_image' ) ) ?>" alt="<?php echo esc_attr( jobboard_option( 'step_1_label' ) ); ?>" title="<?php echo esc_attr( jobboard_option( 'step_3_title' ) ); ?>" /></div><!-- /.step-image -->
				<h3 class="step-title"><?php echo apply_filters( 'jobboard_step_title_three', jobboard_option( 'step_3_title' ) ); ?></h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number"><?php echo apply_filters( 'jobboard_step_number_four', jobboard_option( 'step_4_label' ) ); ?></div>
				<div class="step-image step-last"><img src="<?php echo esc_url( jobboard_option( 'step_4_image' ) ) ?>" alt="<?php echo esc_attr( jobboard_option( 'step_1_label' ) ); ?>" title="<?php echo esc_attr( jobboard_option( 'step_4_title' ) ); ?>" /></div><!-- /.step-image -->
				<h3 class="step-title"><?php echo apply_filters( 'jobboard_step_title_four', jobboard_option( 'step_4_title' ) ); ?></h3>
			</div><!-- /.col-sm-3 -->
		</div><!-- /.job-step-wrapper -->
	</div><!-- /.container -->
</div><!-- /#job-step -->
