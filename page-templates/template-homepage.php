<?php

/**
 * Template Name: Homepage
 *
 * @since Job Board 1.0.0
 */

get_header();

	if( jobboard_option('enable_homepage_slider' ) ){
		get_template_part( 'template-parts/homepage', 'slider_alt' );
	}

	get_template_part( 'template-parts/form', 'job_search_alt' );

	get_template_part( 'template-parts/listing', 'job_listing' );

	if( jobboard_option( 'enable_job_status' ) ){
		get_template_part( 'template-parts/homepage', 'job_stats_alt' );
	}

	if( jobboard_option( 'enable_job_steps' ) ){
		get_template_part( 'template-parts/homepage', 'job_step' );
	}

	if( jobboard_option( 'enable_testimonial' ) ){
		get_template_part( 'template-parts/homepage', 'testimonials_alt' );
	}

	if( jobboard_option( 'enable_company' ) ){
		get_template_part( 'template-parts/homepage', 'company_alt' );
	}

get_footer( 'homepage_alt' );
