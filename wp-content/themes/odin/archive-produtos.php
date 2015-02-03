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
		<div id="primary" class="col-xs-12 col-md-12 content-prod">
			<main id="main" class="site-main" role="main">
			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
			<section class="view-prod">
				<header>
					<h1> Todos os Produtos </h1>
				</header>
				<?php
					if( have_posts() ){
				?>
					<div class="lista-prod col-lg-8 col-md-8 col-xs-8 col-sm-8">
						<ul>
						<?php
						while( have_posts() ){
							the_post();
							$id = get_the_id();
							$title_produto = get_the_title();
							$imagem = get_field('imagem-produto', $id);
								//echo '<pre>' . print_r( $imagem, true ) . '</pre>';								
							
							?>
							<li class="col-lg-3 col-md-3 col-xs-3 col-sm-12">
								<a href="<?php echo get_permalink($id); ?>">
									<div class="item-produto">
										<div class="imagem-produto">
										<div class="mascara-prod"></div>
											<img src="<?php echo $imagem; ?>" width="181">
										</div>
										<div class="content-produto">
											<h3> <?php echo $title_produto; ?> </h3>
										</div>
									</div>
								</a>
							</li>
							<?php 
						}
						// Page navigation.
						odin_paging_nav();
						
					?>


						</ul>
					</div>
						
					<?php } ?>
					<div class="lista-categorias col-lg-4 col-md-4 col-xs-4 col-sm-4">
						<?php get_sidebar(); ?>
					</div>
			</section>
				

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();
