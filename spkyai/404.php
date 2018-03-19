<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spkyai
 */

get_header(); ?>

	<div class="uk-block">
		<div class="uk-container uk-container-center">
			<div class="uk-flex uk-flex-center">
				<section class="error-404 not-found">
					<header class="page-header uk-text-center">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'spkyai' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<div class="uk-text-center">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'spkyai' ); ?></p>

							<?php
								get_search_form();
							?>
						</div>
						<hr class="uk-margin-large-top">
						<div class="spacer-v-4"></div>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
