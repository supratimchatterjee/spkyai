<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spkyai
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="uk-block tm-blog-section uk-margin-large-bottom">
	<div class="uk-container uk-container-center">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile;
endif; ?>
<?php

get_footer();
