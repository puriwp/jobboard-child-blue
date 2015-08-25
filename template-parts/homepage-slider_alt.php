<?php
/**
 * Template Part Name : Homepage Slider
 *
 * @package WordPress
 * @subpackage Job_Board
 * @since Job Board 1.0
 *
 */
?>
<div id="homepage-banner" class="hidden-xs">
	<div id="slider-wrapper">
	<?php

		$slider_id = jobboard_option( 'select_slider' );
		$mb_args = array( 'type'	=> 'image' );
		$slider_item = rwmb_meta( 'jobboard_slider_images', $mb_args, $slider_id );

		foreach( $slider_item as $item ){
			echo '<div class="slider-item">';
			echo '<img class="homepage-slider-image" src="'.esc_url( $item['full_url'] ).'" alt="'.esc_attr( $item['alt'] ).'" title="'.esc_attr( $item['title'] ).'" />';
			echo '</div><!-- /.slider-item -->';
		}//endforeach;

	?>
	</div><!-- /.slider-images-container -->
</div><!-- /#homepage-banner -->
