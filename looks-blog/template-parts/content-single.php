<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package looks-blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
		<div class="entry-container">
			<header class="entry-header">
				<footer class="entry-footer">
					<?php looks_blog_entry_footer(); ?>
				</footer><!-- .entry-footer -->

				<?php
				if (is_singular()):
					the_title('<h1 class="entry-title">', '</h1>');
				else:
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif; ?>
			</header><!-- .entry-header -->
			
			<div class="entry-meta">
				<?php //looks_blog_posted_by(); ?>
				<?php looks_blog_posted_on(); ?>
				<!-- <div class="featured-image" style="margin-top: 15px;">
					<?php //looks_blog_post_thumbnail(); ?>
				</div> -->
			</div>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->