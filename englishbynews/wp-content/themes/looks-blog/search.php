<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package looks-blog
 */

get_header();
?>
<div class="block-gap clear">
	<div class="container">
		<main id="primary" class="site-main">
			<div class="archive-blog column-2 clear">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h2 class="page-title" style="text-align: center; font-size: 36px; color: #7286D3;">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'looks-blog' ), '<span style="font-style: italic; font-size: 32px;">' . get_search_query() . '</span>' );
							?>
						</h2>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div>

<?php

get_footer();
