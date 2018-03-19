<?php
/*
Template Name: Blog
 */

get_header(); ?>

<!-- Section : Blog Section -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="uk-block tm-blog-section uk-margin-large-bottom">
	<div class="uk-container uk-container-center">
		<div class="spacer-v-3"></div>
		<div class="uk-width-medium-7-10 uk-container-center">
			<div class="uk-grid" data-uk-margin="{cls:'uk-margin-large-top'}">
				<?php $the_query = new WP_Query( array('posts_per_page' => -1,'post_type' => 'post' )); ?>
		        <?php if( $the_query->have_posts() ): ?>
		        	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="uk-width-medium-1-1">
						<div class="tm-blog-card">
							<div class="uk-text-uppercase uk-clearfix tm-auth-desc">
								<?php
								$user = wp_get_current_user();
								if ( $user ) : ?>
									<img class="uk-float-left uk-border-circle" src="<?php $avtarimg =  scrapeImage(get_wp_user_avatar($user_info->ID)); echo $avtarimg ; ?>" height="50" width="50"/>
								<?php endif; ?>
								<div class="tm-overflow-hidden">
									<a class="uk-display-block uk-h6" href="#">
										<?php the_author(); ?>
									</a>
									<div class="uk-margin-small-top uk-article-meta">
										<ul>

											<li><a href="#"><?php the_time('j F' ); ?></a></li>
											<li><i class="uk-icon-tag"></i> <?php the_category(', '); ?></li>
											<?php if(get_field('min_read_number')) :?>
											<li><?php the_field('min_read_number'); ?> min read</li> <!-- Make this a custom field  -->
											<?php endif; ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="spacer-v-2"></div>
							<a class="uk-h1" href="<?php the_permalink(); ?>">
								<i><?php the_title(); ?></i>
							</a>
							<div class="spacer-v-1"></div>
							<?php the_post_thumbnail('large',array('class' => 'uk-width-1-1'));?>
							<div class="spacer-v-1"></div>
							<div class="uk-margin-top">
								<?php the_content('<span class="uk-button uk-button-default">Read More</span>'); ?>
							</div>
						</div>
						<div class="spacer-v-3"></div>
					</div>
					<?php endwhile; ?>
		  		<?php endif; ?>
		  		<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<!-- End -->
	<?php endwhile;?>
<?php endif; ?>

<?php
get_footer();
