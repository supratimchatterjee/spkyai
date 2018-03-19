<!-- Section : Banner -->
<div class="site-banner uk-height-viewport uk-position-ralative">
    <?php /*<ul class="uk-slideshow">
        <li class="uk-overlay uk-height-viewport">
			<img class="" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/banner-img-1.jpg">
			<div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle">
				<div class="uk-width-medium-9-10 uk-text-center">
					<h2><?php the_sub_field('content'); ?></h2>
					<div class="spacer-v-3"></div>
					<?php if(get_sub_field('button_link')): ?>
					<a href="<?php the_sub_field('button_link'); ?>"class="uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a>
					<?php endif; ?>
				</div>
			</div>
        </li>
    </ul> */ ?>
    
    <div class="uk-text-right uk-cover-background uk-position-cover">
	    <!-- particles.js container -->
		<div id="particles-js" class="uk-visible-large uk-height-1-1"></div>
		<div class="uk-hidden-large uk-cover-background uk-position-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/dummy-images/banner-img-1.jpg);"></div>
		<!--End-->
    </div>
    
	<div class="uk-position-absolute uk-width-medium-9-10 tm-overlay-caption">
		<div class="uk-text-center">
			<h2><?php the_sub_field('content'); ?></h2>
			<div class="spacer-v-3"></div>
			<?php if(get_sub_field('button_link')): ?>
			<a href="<?php the_sub_field('button_link'); ?>"class="uk-button uk-button-default"><?php the_sub_field('button_text'); ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- End -->
