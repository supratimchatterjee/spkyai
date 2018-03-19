<?php
/*
Template Name: Flexible Content
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php if( have_rows('page_builder') ):?>
			<?php while ( have_rows('page_builder') ) : the_row();?>
				<?php get_template_part( 'partials/part', get_row_layout() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>

	<?php endwhile;?>
<?php endif; ?>

<?php
get_footer();
