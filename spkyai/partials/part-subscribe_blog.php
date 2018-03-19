<!-- Section : Subscribe to blog -->
<div class="uk-block uk-padding-top-remove tm-subscribe">
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-7-10 uk-container-center uk-text-center">
			<h2 class="uk-text-uppercase"><?php the_sub_field('section_title'); ?></h2>
			<?php  $code = get_sub_field('short_code'); ?>
			 <?php echo do_shortcode($code ); ?>
		</div>
	</div>
</div>
<!-- End -->
