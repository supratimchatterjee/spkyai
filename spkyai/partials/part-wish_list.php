<!-- Section : Self-service block -->
<div class="uk-block tm-self-service-block">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-large" data-uk-margin>
			<div class="uk-width-medium-1-2">
				<?php if(get_sub_field('title')): ?>
				<h2><?php the_sub_field('title'); ?></h2>
				<div class="spacer-v-5"></div>
				<?php endif; ?>
				<img src="<?php the_sub_field('image'); ?>">
			</div>
			<div class="uk-width-medium-1-2">
				<?php the_sub_field('content'); ?>
				<div class="uk-text-center">
					<?php if(get_sub_field('button_link')): ?>
					<a href="<?php the_sub_field('button_link'); ?>" class="uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->
