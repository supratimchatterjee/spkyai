<!-- Section : Image with text -->
<div class="uk-block-large tm-large-callout">
	<div class="uk-container uk-container-center">
		<h2 class="uk-text-center"><?php the_sub_field('section_title'); ?></h2>
		<div class="spacer-v-4"></div>
		<div class="uk-grid uk-grid-large" data-uk-margin="{cls:'uk-margin-top'}">
			<div class="uk-width-medium-6-10">
				<img class="uk-width-1-1" src="<?php the_sub_field('image'); ?>">
			</div>
			<div class="uk-width-medium-4-10">
				<?php the_sub_field('content'); ?>
			</div>
		</div>
	</div>
</div>
<!-- End -->
