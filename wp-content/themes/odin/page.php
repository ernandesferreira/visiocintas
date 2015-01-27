<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="<?php echo odin_classes_page_full(); ?>">
		<main id="main" class="site-main" role="main">
			<div class="page-single">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'content', 'page' );
					endwhile;
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
