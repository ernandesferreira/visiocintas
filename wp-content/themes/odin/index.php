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
	<section class="mapa">
		<div class="container">
				<div id="main" class="site-main row">
					<div id="primary" class="col-xs-12 col-md-12">
						<main id="main" class="site-main" role="main">
							<div class="conteudo-mapa">
								<header>
									<h1> Nossa Localização </h1>
								</header>
							</div>
						</main>
					</div>
				</div>
			</div>
			<div class="embed-mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3677.86425958553!2d-43.418498199999995!3d-22.8074931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99614d1e9c1a2b%3A0x14864660e09a9f!2sAv.+Get%C3%BAlio+Vargas%2C+1650+-+Centro%2C+Nil%C3%B3polis+-+RJ%2C+26510-016!5e0!3m2!1spt-BR!2sbr!4v1422065423503" width="1265" height="310" frameborder="0" style="border:0"></iframe>
			</div>				
	</section>
	
<?php get_footer();
