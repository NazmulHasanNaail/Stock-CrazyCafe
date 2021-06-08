<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<?php if(is_active_sidebar('stock-footer')): ?>
			<div class="row">
				<?php dynamic_sidebar('stock-footer'); ?>
			</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-md-12">
					<div class="stock-footer-botom">
						<div class="row">
							<div class="col-md-4">
								<?php esc_html_e('Copyright © 2017 FairDealLab - All Rights Reserved', 'stock-crazycafe'); ?>
							</div>
							<div class="col-md-4">
								<?php wp_nav_menu(array('theme_location' => 'footer-menu',)); ?>
							</div>
							<div class="col-md-4">
								<div class="social-icons">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
									<a href="#"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
