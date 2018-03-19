<!-- Section : Help at Hello -->
<div class="uk-block tm-hah">
	<div class="uk-container uk-container-center">
		<div class="tm-panel-box">
			<div class="spacer-v-1"></div>
			<h2 class="uk-text-center"><?php the_sub_field('section_title'); ?></h2>
			<div class="spacer-v-3"></div>
			<div class="uk-width-8-10 uk-container-center">
				<div class="uk-grid uk-text-center" data-uk-margin>
					<?php if( have_rows('content') ): ?>
						<?php while( have_rows('content') ): the_row(); ?>
					<div class="uk-width-medium-1-3">
						<img src="<?php the_sub_field('icon'); ?>">
						<h4><?php the_sub_field('title'); ?></h4>
					</div>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				<div class="uk-margin-large-top">
					<?php $divider = get_sub_field('check_dividers_top'); ?>
						<?php if($divider): ?>
							<?php $class = 'tm-section-border-top';  ?>
						<?php endif; ?>
					<div class="uk-grid uk-grid-large uk-flex-middle uk-grid-divider uk-grid-match <?php echo $class; ?>" data-uk-margin data-uk-grid-match>
						<?php $check = get_sub_field('check_one_column'); ?>
						<?php if($check): ?>
							<div class="uk-width-1-1 tm-quote uk-text-center">
								<h4>
									<?php the_sub_field('one_column_content'); ?>
								</h4>
							</div>
							<?php else: ?>
							<div class="uk-width-medium-1-2">
								<?php the_sub_field('left_content'); ?>
							</div>
							<div class="uk-width-medium-1-2 tm-quote">
								<h4>
									<?php the_sub_field('right_content'); ?>
								</h4>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
			<div class="spacer-v-3"></div>
		</div>
	</div>
</div>
<!-- End -->
