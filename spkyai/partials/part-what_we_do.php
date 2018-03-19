<!-- Section : What we do -->
<div class="uk-block tm-wwd">
	<div class="uk-container uk-container-center">
		<div class="uk-flex uk-flex-center">
			<div class="uk-text-center tm-panel-heading">
				<h4 class="tm-color"><?php the_sub_field('section_title'); ?></h4>
				<h2><?php the_sub_field('section_sub_title'); ?></h2>
			</div>
		</div>
		<div class="spacer-v-3"></div>
		<div class="uk-grid" data-uk-margin="{cls:'tm-margin-large-top'}">
			<?php if( have_rows('content') ): ?>
					<?php $i = 1; ?>
				<?php while( have_rows('content') ): the_row(); ?>
			<div class="uk-width-medium-1-2">
				<div class="tm-panel-box">
					<div class="uk-clearfix">
						<img class="uk-float-left" src="<?php the_sub_field('icon'); ?>">
						<div class="tm-overflow-hidden tm-margin-large-top">
							<h4><?php the_sub_field('title'); ?></h4>
							<p class="tm-minimize">
								<?php the_sub_field('content'); ?>
							</p>

						</div>
					</div>
				</div>
			</div>
				<?php $i++; ?>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</div>
<!-- End -->
