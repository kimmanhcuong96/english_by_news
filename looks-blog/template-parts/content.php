<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package looks-blog
 */
$LEVEL1_URL_PART = '-level-1';
$LEVEL2_URL_PART = '-level-2';
$LEVEL3_URL_PART = '-level-3';

$LEVEL1_TITLE_PART = 'level 1';
$LEVEL2_TITLE_PART = 'level 2';
$LEVEL3_TITLE_PART = 'level 3';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (strpos(get_permalink(), $LEVEL1_URL_PART) !== false): ?>
		<div class="post-wrapper clear">
			<div class="featured-image">
				<?php looks_blog_post_thumbnail(); ?>
			</div>

			<div class="entry-container">
				<header class="entry-header">
					<footer class="entry-footer">
						<?php looks_blog_entry_footer(); ?>
					</footer><!-- .entry-footer -->

					<?php
					$title = get_the_title(); // Get the post title
					$modified_title = str_replace("$LEVEL1_TITLE_PART", "", $title);
					$modified_title = str_replace("$LEVEL2_TITLE_PART", "", $modified_title);
					$modified_title = str_replace("$LEVEL3_TITLE_PART", "", $modified_title);
					if (is_singular()):
						echo '<h1 class="entry-title">' . $modified_title . '</h1>';
						// the_title('<h1 class="entry-title">', '</h1>');
					else:
						echo '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $modified_title . '</a></h2>';
						// the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-content -->

				<div class="entry-meta">
					<?php //looks_blog_posted_by(); ?>
					<?php looks_blog_posted_on(); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->