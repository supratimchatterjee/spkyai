<!-- Section : Two column with image -->
<?php $ceck = get_sub_field('show_image_left'); ?>
<?php if($ceck): ?>
	<?php $push = 'uk-push-1-2'; ?>
	<?php $pull = 'uk-pull-1-2'; ?>
<?php endif; ?>

<?php $ceck_divider_top = get_sub_field('dividers_top'); ?>
<?php if($ceck_divider_top ): ?>
	<?php $top = 'tm-section-border-top'; ?>
<?php endif; ?>

<?php $ceck_divider_buttom = get_sub_field('dividers_bottom'); ?>
<?php if($ceck_divider_buttom): ?>
	<?php $bottom = 'tm-section-border-bottom'; ?>
<?php endif; ?>
<div class="uk-block uk-padding-bottom-remove c_d-tci <?php echo $top; ?> <?php echo $bottom; ?>">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-flex-middle" data-uk-margin="{cls:'uk-margin-top'}">
			<div class="uk-width-medium-1-2 uk-text-center <?php echo $push; ?>">
				<img src="<?php the_sub_field('image'); ?>">
			</div>
			<div class="uk-width-medium-1-2  <?php echo $pull; ?> ">
				<h2><?php the_sub_field('section_title'); ?></h2>
				<div class="uk-width-medium-7-10">
					<p>
						<?php the_sub_field('content'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->
