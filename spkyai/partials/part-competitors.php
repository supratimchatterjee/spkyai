<!-- Section : Comparision table -->
<div class="uk-block tm-ctable uk-margin-large-bottom">
	<div class="uk-container uk-container-center">
		<div class="uk-width-large-4-10 uk-width-medium-5-10 uk-text-center uk-container-center">
			<h2><?php the_sub_field('section_title'); ?></h2>
			<p>
				<?php the_sub_field('descrioption'); ?>
			</p>
		</div>
		<div class="spacer-v-4"></div>
			<div class="uk-grid uk-grid-collapse uk-flex-middle" data-uk-margin>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center c_d-faded tm-type-one">
						<h6><?php the_sub_field('title_left'); ?></h6>
						<ul>
							<?php if( have_rows('content_left') ): ?>
								<?php while( have_rows('content_left') ): the_row(); ?>
								<?php $id = get_sub_field('check_to_show_wrong'); ?>
								<?php if($id):?>
									<?php $class = 'tm-wrong';?>
								<?php else: ?>
									<?php $class = 'tm-right';?>
								<?php endif;  ?>
								<li class="<?php echo $class; ?>"><?php the_sub_field('list_content') ?></li>
								<?php endwhile; ?>
							<?php endif; ?>

						</ul>
					</div>
				</div>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center tm-type-two">
						<h4><?php the_sub_field('title_center'); ?></h4>
						<p>
							<?php the_sub_field('description_center'); ?>
						</p>
						<ul>
							<?php if( have_rows('content_center') ): ?>
								<?php while( have_rows('content_center') ): the_row(); ?>
							<li class="tm-right"><?php the_sub_field('list_content') ?></li>
								<?php endwhile; ?>
							<?php endif; ?>

						</ul>
						<div>
							<?php if(get_sub_field('button_link')): ?>
							<a href="<?php the_sub_field('button_link'); ?>" class="uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center c_d-faded tm-type-three">
						<h6><?php the_sub_field('title_right'); ?></h6>
						<ul>
							<?php if( have_rows('content_right') ): ?>
								<?php while( have_rows('content_right') ): the_row(); ?>
								<?php $id = get_sub_field('check_to_show'); ?>
								<?php if($id):?>
									<?php $class = 'tm-wrong';?>
								<?php else: ?>
									<?php $class = 'tm-right';?>
								<?php endif;  ?>
								<li class="<?php echo $class; ?>"><?php the_sub_field('list_content') ?></li>
								<?php endwhile; ?>
							<?php endif; ?>

						</ul>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- End -->
