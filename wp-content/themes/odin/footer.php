<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	

		<footer id="footer" role="contentinfo">
			<section class="fale-conosco-home">
				<div class="container">
						<div id="main" class="site-main row">
							<div id="primary" class="col-xs-12 col-md-12">
								<main id="main" class="site-main" role="main">
									<div class="conteudo-fale">
										<header>
											<h1> Fale Conosco </h1>
										</header>
									</div>
									<div class="text-expli">
										<p> Entre em contato conosco, e solicite um orçamento! </p>
									</div>
								</main>
							</div>
						</div>
					</div>
			</section>
			<div class="site-info">
				<span class="text-footer">&copy; 
				<?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> <br />
				<?php echo 'Desenvolvido por <a href="http
				://ernandesfereira.com.br" rel="nofollow" target="_blank"><span class="ernandes">Ernandes Ferreira</span></a>'; ?></span>
			</div><!-- .site-info -->
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
</body>
</html>
