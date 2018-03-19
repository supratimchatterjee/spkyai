<!-- Section : Callout -->
<?php $check = get_sub_field('check_to_show_blue'); ?>
<?php if($check ): ?>
	<?php $class = 'tm-secondary-callout'; ?>
<?php endif; ?>

<div class="uk-block tm-callout <?php echo $class; ?> uk-text-center">
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-6-10 uk-container-center">
			<h2><?php the_sub_field('title'); ?></h2>
			<p>
				<?php the_sub_field('description'); ?>
			</p>
			<div class="spacer-v-3"></div>
			<?php if(get_sub_field('button_link')): ?>
			<a href ="<?php the_sub_field('button_link'); ?>" class="uk-button uk-button-secondary"><?php the_sub_field('button_text'); ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- End -->
