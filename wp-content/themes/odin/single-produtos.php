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
		<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<?php $post = get_post(); ?>
			<section class="single-produto">
				<header>
					<h1> <?php the_title(); ?> </h1>
				</header>
				<div class="content-single">
					<div class="imagem-single col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<?php
							$url =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
						<img class="img-responsive" src="<?php echo $url; ?>"> 
					</div>
					<div class="descricao-single col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<?php							
							echo $post->post_content;
						?>
					</div>
					<button type="button" class="btn btn-success"><a href="#contato" name="contato"> Pedir Orçamento </a></button>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="coment">
							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
