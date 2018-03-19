<!-- Section : Get to know block -->
<div class="uk-block-large uk-padding-bottom-remove c_d-gtk">
	<div class="uk-container uk-container-center">
		<div class="uk-text-center">
			<h1 class="uk-text-uppercase"><?php the_sub_field('section_title'); ?></h1>
			<div class="uk-width-medium-4-10 uk-container-center">
				<h6 class="tm-small-text"><?php the_sub_field('description'); ?></h6>
			</div>
		</div>

		<?php $img = get_sub_field('image') ;?>
		<?php $content = get_sub_field('content') ;?>

		<?php if( $img && $content ) : ?>
			<div class="spacer-v-4"></div>
			<div class="uk-grid uk-grid-collapse" data-uk-margin="{cls:'uk-margin-top'}">
				<?php if( $img ) : ?>
					<div class="uk-width-medium-6-10 uk-push-4-10">
						<img class="uk-width-1-1" src="<?php the_sub_field('image'); ?>">
					</div>
				<?php endif; ?>

				<?php if( $content ) : ?>
					<div class="uk-width-medium-4-10 uk-pull-6-10">
						<?php the_sub_field('content'); ?>
					</div>
				<?php endif; ?>			
			</div>
			<div class="spacer-v-2"></div>
		<?php endif; ?>
	</div>
</div>
<!-- End -->
