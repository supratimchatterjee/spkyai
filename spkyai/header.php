<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spkyai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Roboto:300,400,500,700,900,900i" rel="stylesheet">

	<?php wp_head(); ?>
	<!-- Start of Async Drift Code -->
	<script>
	!function() {
	  var t;
	  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
	  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
	  t.factory = function(e) {
		return function() {
		  var n;
		  return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
		};
	  }, t.methods.forEach(function(e) {
		t[e] = t.factory(e);
	  }), t.load = function(t) {
		var e, n, o, i;
		e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
		o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
		n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
	  });
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('u8upha8dkuxf');
	</script>
	<!-- End of Async Drift Code -->


</head>

<body <?php body_class(); ?>>

	<header class="site-header" data-uk-sticky="{top:-50, animation: 'uk-animation-slide-top'}">
		<div class="uk-container uk-container-center">
			<nav class="uk-navbar">
				<a href="<?php echo home_url( '/' ); ?>" class="uk-navbar-brand"><img src="<?php the_field('logo','option') ?>" data-uk-svg></a>
				<div class="uk-navbar-flip">
					<div class="uk-hidden-small">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1',  'menu_class' => 'uk-navbar-nav', 'container' => false ) ); ?>
						<a href="#offcanvas-desk" class="tm-toggle-h uk-navbar-toggle" data-uk-offcanvas></a>
					</div>
					<div class="uk-visible-small">
						<a href="#offcanvas-mob" class="uk-navbar-toggle" data-uk-offcanvas></a>
					</div>
				</div>
			</nav>
		</div>
	</header>
<!-- Offcanvas menu : Desktop -->
	<div id="offcanvas-desk" class="uk-offcanvas">
		<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
			<div class="tm-mobile-menu">
				<ul class="uk-list uk-text-center uk-nav uk-nav-offcanvas">
					<?php if( have_rows('menu','option') ): ?>
						<?php while( have_rows('menu','option') ): the_row(); ?>
						<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="tm-header-social uk-text-center">
				<?php if(get_field('facebook_link','option')): ?>
				<a target="_blank" href="<?php the_field('facebook_link','option'); ?>"><i class="uk-icon-facebook-f"></i></a>
				<?php endif; ?>
				<?php if(get_field('twitter_link','option')): ?>
				<a target="_blank" href="<?php the_field('twitter_link','option'); ?>"><i class="uk-icon-twitter"></i></a>
				<?php endif; ?>
				<?php if(get_field('linkedin_link','option')): ?>
				<a target="_blank" href="<?php the_field('linkedin_link','option'); ?>"><i class="uk-icon-linkedin"></i></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<!--End-->


<!-- Offcanvas menu : Menu -->
	<div id="offcanvas-mob" class="uk-offcanvas">
		<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
			<div class="tm-mobile-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1',  'menu_class' => 'uk-nav uk-nav-offcanvas', 'container' => false ) ); ?>
				<div class="uk-text-center">
					<a class="uk-button" data-uk-toggle="{target:'#toggle-section-1'}">More <i class="uk-icon-plus"></i></a>
					<div id="toggle-section-1" class="uk-hidden">
						<ul class="uk-list uk-text-center uk-nav uk-nav-offcanvas">
							<?php if( have_rows('menu','option') ): ?>
								<?php while( have_rows('menu','option') ): the_row(); ?>
								<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="tm-header-social uk-text-center">
				<?php if(get_field('facebook_link','option')): ?>
				<a target="_blank" href="<?php the_field('facebook_link','option'); ?>"><i class="uk-icon-facebook-f"></i></a>
				<?php endif; ?>
				<?php if(get_field('twitter_link','option')): ?>
				<a target="_blank" href="<?php the_field('twitter_link','option'); ?>"><i class="uk-icon-twitter"></i></a>
				<?php endif; ?>
				<?php if(get_field('instagram_link','option')): ?>
				<a target="_blank" href="<?php the_field('instagram_link','option'); ?>"><i class="uk-icon-instagram"></i></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<!--End-->
