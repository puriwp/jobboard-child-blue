<?php
/**
 * Template Part Name : Companies Listing
 *
 * @package WordPress
 * @subpackage Job_Board
 * @since Job Board 1.0
 *
 */
?>
<div id="companies-listing" class="company-listing-alt">
	<div class="container">
		<h1 class="companies-listing-title"><?php echo apply_filters( 'jobboard_companies_listings_title', jobboard_option('company_title') ); ?></h1>
		<p class="companies-listing-desc">
		<?php
			echo esc_attr( jobboard_option('company_description') );
		?>
		</p>
		<div class="companies-listing-wrapper">
		<?php

		$companies = jobboard_option('company_slider');

		$slider_id = $companies;

		$slides = jobboard_get_slider($slider_id);

		if($slides):

		foreach($slides as $slide):

			$image_url = $slide['slider_item_img'];
			$url = $slide['slider_item_img_url'];
			$size = 'jobboard-companies-listing';

			$attachment_id = jobboard_get_attachment_id_from_url($image_url);
			$image_resized = wp_get_attachment_image_src($attachment_id, $size);
			$image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

			echo '<div id="company-'.$attachment_id.'" class="company-item">';
			echo '<a target="_blank" title="'.$image_alt.'" href="'.$url.'" width="'.$image_resized[1].'" height="'.$image_resized[2].'">';
			echo '<img src="'.$image_resized[0].'" width="'.$image_resized[1].'" height="'.$image_resized[2].'" alt="'.$image_alt.'" />';
			echo '</a>';
			echo '</div><!-- /.company-item -->';

		endforeach;
		endif;

		?>



		</div><!-- /.companies-listing-wrapper -->


	</div><!-- /.container -->
</div><!-- /#companies-listing -->
