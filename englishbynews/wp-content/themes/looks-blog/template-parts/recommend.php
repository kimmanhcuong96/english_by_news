<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package looks-blog
 */
?>

<article id="recommend-guide">
	<div class="post-wrapper base-listen">
		<div class="entry-container">
			<title>How to Improve Your English with EnglishByNews</title>
			<h3 style="text-align: center; font-weight: 600; color: #7286D3"> How to Improve Your English</h3>

			<!-- <h2>Test</h2>
			<p>Do the test at <a href="TestLanguagesLink">Test Languages</a>.</p>
			<p>Go to your level. Go to Level 1 if you know 1-1000 words. Go to Level 2 if you know 1000-2000 words. Go
				to Level 3 if you know 2000-3000 words.</p> -->
			<div class="method-to-improve">
				<div class="icon-wrap">
					<img src=<?php echo get_template_directory_uri() . '../assets/img/book.png'; ?> alt="" height="30"
						width="30" />
				</div>
				<div class="method-content">
					<h4>Reading</h4>
					<p>Read a pair of <a style="text-decoration: unset;" href="<?php echo home_url() ?>">news
							articles</a> daily.</p>
					<p>Review the <a style="text-decoration: unset;" href="<?php echo home_url() ?>">news articles</a>
						from the previous day and assess your recall of unfamiliar vocabulary.
					</p>
				</div>
			</div>

			<div class="method-to-improve">
				<div class="icon-wrap">
					<img src=<?php echo get_template_directory_uri() . '../assets/img/headphone.png'; ?> alt=""
						height="30" width="30" />
				</div>
				<div class="method-content">
					<h4>Listening</h4>
					<p>Simultaneously listen to <a style="text-decoration: unset;"
							href="<?php echo home_url() ?>">today's news</a> while reading the corresponding text.</p>
					<p>Focus on <a style="text-decoration: unset;" href="<?php echo home_url() ?>">today's news</a> by
						only listening, avoiding reading the text that comes with it.</p>
				</div>
			</div>

			<div class="method-to-improve">
				<div class="icon-wrap">
					<img src=<?php echo get_template_directory_uri() . '../assets/img/write.png'; ?> alt="" height="30"
						width="30" />
				</div>
				<div class="method-content">
					<h4>Writing</h4>
					<p>Answer the question below the present news and express your response in the comments area.</p>
				</div>
			</div>

			<div class="method-to-improve">
				<div class="icon-wrap">
					<img src=<?php echo get_template_directory_uri() . '../assets/img/speaking.png'; ?> alt=""
						height="30" width="30" />
				</div>
				<div class="method-content">
					<h4>Speaking</h4>
					<p>Speak aloud the <a style="text-decoration: unset;" href="<?php echo home_url() ?>">news articles</a> like a narrator.</p>
					<p>Discuss the content of the <a style="text-decoration: unset;" href="<?php echo home_url() ?>">news articles</a> with friends on a daily basis.</p>
				</div>
			</div>
		</div>
	</div>
</article>