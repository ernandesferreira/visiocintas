<?php get_header(); ?>
	<div class="banner">
	</div>
	<section class="produtos">
		<div class="container">
			<div id="main" class="site-main row">
				<div id="primary" class="col-xs-12 col-md-12">
					<main id="main" class="site-main" role="main">
						<div class="container-produtos">
							<header>
								<h1> Produtos </h1>
							</header>
							<article class="lista-produtos">
							<?php
								$the_query = new WP_Query( array( 'post_type' => 'home' ) );
								if ( $the_query->have_posts() ) {

									$post_query = $the_query->posts;
									$id_post = $post_query[0]->ID;
									$produtos = get_field('ordem-produtos', $id_post);							
							?> 
								<ul>
								<?php 
									foreach ($produtos as $produto) {
										$id_produto = $produto->ID;
										$title_produto = $produto->post_title;
										$conteudo_produto = $produto->post_content;
										$link_produto = get_permalink($id_produto);
										$img_produto = get_field('imagem-produto', $id_produto);
										
								?>
									<li class="col-xs-2 col-md-2">
										<a href="<?php echo $link_produto; ?>">
											<div class="hover-prod"><p> <?php echo trim_letras( $title_produto, 20 ); ?> </p></div> 
											<img src="<?php echo $img_produto; ?>"> 
										</a>
									</li>
									<?php } ?>
								</ul>
								<?php } wp_reset_query(); ?>
							</article>
						</div>
					</main><!-- #content -->
				</div><!-- #primary -->	
			</div>
		</div>
		<div class="todos-produtos">
			<div class="container">
				<div id="main" class="site-main row">
					<div id="primary" class="col-xs-12 col-md-12">
						<main id="main" class="site-main" role="main">
							<div class="conteudo-todos-programas">
								<a href="/produtos"><p> Ver todos os Produtos </p></a>
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer();
