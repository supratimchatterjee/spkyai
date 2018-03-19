<!-- Section : Get demo block -->
<?php $id = get_sub_field('check_show_width'); ?>
<?php if($id):?>
	<?php $class = 'uk-width-medium-8-10';?>
<?php else: ?>
	<?php $class = 'uk-width-medium-7-10';?>
<?php endif;  ?>
<div class="uk-block tm-demo-block">
	<div class="uk-container uk-container-center">
		<div class="<?php echo $class; ?> uk-container-center">
			<div class="uk-grid uk-grid-large" data-uk-margin>
				<div class="uk-width-medium-1-2">
					<img src="<?php the_sub_field('image'); ?>">
				</div>
				<div class="uk-width-medium-1-2">
					<?php the_sub_field('content'); ?>
					<div class="uk-text-center-small">
						<?php if(get_sub_field('button_link')): ?>
						<a href="<?php the_sub_field('button_link'); ?>" class="uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a>
						<?php endif;  ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->
