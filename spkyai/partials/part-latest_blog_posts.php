<!-- Section : Blog Section -->
<div class="uk-block tm-blog-section">
	<div class="uk-container uk-container-center">
		<div class="uk-flex uk-flex-center">
			<div class="uk-width-medium-5-10 uk-text-center">
				<img src="<?php the_sub_field('icon_blog'); ?>">
				<h2><?php the_sub_field('title_blog'); ?></h2>
				<h5>
				<?php the_sub_field('content_blog'); ?>
				</h5>
			</div>
		</div>
		<div class="spacer-v-3"></div>
		<div class="uk-flex uk-flex-center" data-uk-grid-match="" data-uk-margin="{cls:'uk-margin-large-top'}">
			<?php $the_query = new WP_Query( array('posts_per_page' => 3,'post_type' => 'post' )); ?>
	        <?php if( $the_query->have_posts() ): ?>
	        	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="uk-width-medium-1-3">
				<div class="tm-blog-card">
					<?php the_post_thumbnail(array(380,290),array('class' => 'uk-width-1-1'));?>
					<div class="tm-card-content">
						<h3><?php the_title(); ?></h3>
						<div class="uk-text-uppercase">
							<?php the_author(); ?> |  <?php the_time('j F' ); ?>
						</div>
						<p>
						<?php echo wp_trim_words( get_the_content(), 25, '...' );?>
						</p>
						<div class="spacer-v-3"></div>
						<a href="<?php the_permalink(); ?>"> Read more</a>
					</div>
				</div>
			</div>
				<?php endwhile; ?>
	  		<?php endif; ?>
	  		<?php wp_reset_query(); ?>

		</div>
	</div>
</div>
<!-- End -->
