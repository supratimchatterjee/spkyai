<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spkyai
 */

?>
<footer class="site-footer uk-contrast">
	<div class="tm-section-top">
		<div class="uk-container uk-container-center uk-position-relative">
			<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
				<?php dynamic_sidebar('sidebar-1'); ?>
				<div class="uk-width-medium-4-10" style="display: none;">
					<h6>PRODUCTS</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-2',  'menu_class' => '', 'container' => false ) ); ?>
				</div>
				<div style="display: none;">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			</div>

		</div>
	</div>
	<div class="tm-section-bottom uk-text-center-small">
		<div class="uk-container uk-container-center">
			<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
				<div class="uk-width-medium-2-10">
					<a href="<?php echo home_url( '/' ); ?>" class="site-logo-footer"><img src="<?php the_field('footer_logo','option') ?>"></a>
				</div>
				<div class="uk-width-medium-2-10">
					<?php the_field('copyright','option') ?>
				</div>
				<div class="uk-width-medium-6-10 uk-text-right">
					<div class="tm-social-footer">
						<?php if(get_field('linkedin_link','option')): ?>
						<a href="<?php the_field('linkedin_link','option'); ?>"><i class="uk-icon uk-icon-linkedin"></i></a>
						<?php endif; ?>
						<?php if(get_field('twitter_link','option')): ?>
						<a href="<?php the_field('twitter_link','option'); ?>"><i class="uk-icon uk-icon-twitter"></i></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>


<?php wp_footer(); ?>

<!-- Script : Particle init -->
<script>
	/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
	particlesJS.load('particles-js', '<?php echo get_template_directory_uri(); ?>/assets/js/particles.json', function() {
	  console.log('callback - particles.js config loaded');
	});
</script>
<!-- End -->

</body>
</html>
