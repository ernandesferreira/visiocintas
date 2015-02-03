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
				<?php echo do_shortcode('[put_wpgm id=1]'); ?>
			</div>				
	</section>
			<section name="contato" id="contato" class="fale-conosco-home">
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
									<div class="">
									<div class="formulario col-md-6 col-md-offset-3">
										<?php
											echo do_shortcode('[gravityform id="1" name="Fale Conosco" title="false" description="false" ajax="true"]');
										?>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="tel" style="  font-size: 35px;  color: #fff;  font-weight: 600;  margin-bottom: 10px;">
												TEL.: (21) 3761-7272
											</div>
										</div>
									</div>
								</main>
							</div>
						</div>
					</div>
			</section>
			<div class="site-info">
				<span class="text-footer">&copy; 
				<?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> <br />
				<?php echo 'Desenvolvido por <a href="http://ernandesferreira.com.br" rel="nofollow" target="_blank"><span class="ernandes">Ernandes Ferreira</span></a>'; ?></span>
			</div><!-- .site-info -->
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
</body>
</html>
