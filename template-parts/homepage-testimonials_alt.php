<?php
/**
 * Template Part Name : Testimonials
 *
 * @package WordPress
 * @subpackage Job_Board
 * @since Job Board 1.0
 *
 */
?>

<div id="testimonials" class="testimonial-homepage-alt">
	<div class="container">
		<h1 class="testimonials-title">
		<?php echo apply_filters( 'jobboard_testimonials_title', jobboard_option( 'testimonial_title' ) ); ?>
		</h1>
		<p class="testimonials-desc">
		<?php echo esc_attr( jobboard_option('testimonial_description') ); ?>
		</p>
	</div><!-- /.container -->

	<div class="container">
		<div id="testimonials-caption-alt" class="owl-carousel">
		<?php
		$args = array(
			'post_type' => 'testimonial',
			'posts_per_page' => -1,
		);
		$testimonials = get_posts($args);

		if( $testimonials ){
			foreach( $testimonials as $post ){
				setup_postdata( $post );
			?>
				<div id="testimonial-caption-<?php echo $post->ID; ?>" class="caption-item">
					<?php echo get_the_post_thumbnail( $post->ID, 'jobboard-testimonials-thumbnail' );?>
					<p class="caption-content">"<?php echo get_post_meta( get_the_id(), '_jboard_testimonial_content', true ); ?>"</p>
					<div class="caption-title"><?php echo esc_attr( get_the_title() ); ?></div>
					<div class="caption-social">
					<?php
						$socials = vp_metabox('jobboard_testimonial_mb.testimonial_social_media');
						if($socials){
							foreach( $socials as $social ){
								foreach( $social as $key=>$item_url){
									if( !empty($social[$key]) ){
										switch($key){
											case 'testimonial_twitter':
												$class = 'twitter';
												break;
											case 'testimonial_facebook':
												$class = 'facebook';
												break;
											case 'testimonial_linkedin':
												$class = 'linkedin';
												break;
											case 'testimonial_google_plus':
												$class = 'google-plus';
												break;
										}

										echo '
										<a class="'.$key.'" href="'.$item_url.'" target="_blank">
											<span class="fa fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-inverse fa-'.$class.' fa-stack-1x"></i>
											</span>
										</a>
										';
									}
								}
							}
						} // if($socials)
					?>
					</div>
				</div>
				<?php
				} // foreach
				wp_reset_postdata();
			} // if($testimonials)
		?>
		</div><!-- /.testimonials-caption -->
	</div><!-- /.container -->
</div><!-- /#testimonials -->
