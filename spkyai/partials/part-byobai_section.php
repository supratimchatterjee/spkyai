<!-- Section : Our Team -->
<div class="uk-block tm-our-team uk-text-center">
	<div class="uk-container uk-container-center">
		<h2><?php the_sub_field('section_title'); ?></h2>
		<div class="uk-width-medium-7-10 uk-container-center">
			<p>
				<?php the_sub_field('content'); ?>
			</p>
		</div>
		<div class="spacer-v-2"></div>
		<ul class="uk-grid uk-grid-width-medium-1-5 uk-flex-middle uk-flex-center" data-uk-margin="{cls:'uk-margin-top'}">
			<?php $images = get_sub_field('logo_gallery'); ?>
			<?php foreach( $images as $image ): ?>
			<li><img src="<?php echo $image['sizes']['large']; ?>"></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<!-- End -->
