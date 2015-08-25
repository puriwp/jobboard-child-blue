<?php
/**
 * The template for displaying the custom footer for "template-homepage-alt.php"
 *
 * @since Job Board 1.0
 */
?>

		<?php if ( has_nav_menu( 'secondary' ) ) : ?>

		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'secondary',
					'menu_id' 			=> 'footer-menu',
					'depth'				=> 1
					)
				);
			?>
		</nav><!-- #footer-navigation -->

		<?php endif;?>

		<footer id="footer">
			<?php get_sidebar( 'footer' ); ?>
			<div id="footer-text" class="container">
			<?php
				if( jobboard_option( 'enable_custom_footer' ) ){
					echo jobboard_option( 'custom_footer_text' );
				}else{
					echo esc_html( '2014 &copy; Minimal Themes, All Rights Reserved', 'jobboard' );
				}
			?>
			</div><!-- /#footer-text -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php wp_footer(); ?>
</body>
</html>
