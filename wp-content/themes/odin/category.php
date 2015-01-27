<?php
 
get_header(); ?>
 
        <div class="container">
            <div id="content" role="main">
            <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
			<?php 
					$category = get_queried_object();
					$name_category = $category->name;
					$id_category = $category->term_id;


					$query = new WP_Query(
						array(
						'post_type'=> array(
							'post',
							'produtos',
							)
						)
					);
					/*$query = new WP_Query(array('post_type' => 'post',
						'tax_query' => array(
						  array(
						   'taxonomy' => 'post_tag',
						   'field' =>'slug',
						   'terms' => $name_category
						  )
						 ))); */
						
				?>
 				
                <h1 class="page-title">
	                <?php echo $name_category; ?> 
                </h1>
               <?php 
               	$prod_loop = new WP_Query( array( 'post_type' => 'produtos', 'orderby' => 'menu_order', 'category_name' => $name_category ) ); 
               	if( $prod_loop->have_posts() ){
               	//echo '<pre>' . print_r( $prod_loop, true ) . '</pre>';
               ?>
               <div class="lista-prod col-lg-8 col-md-8 col-xs-8 col-sm-8">
					<ul>
			 			<?php 
			 				while ( $prod_loop->have_posts() ) {
			 					$prod_loop->the_post();
			 					$id = get_the_id();
								$title_produto = get_the_title();
								$imagem = get_field('imagem-produto', $id);			 				
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
	 					<?php } ?>
	 				</ul>
 				</div>
 				<?php }else{ ?>
 				<div class="lista-prod col-lg-8 col-md-8 col-xs-8 col-sm-8">
 					<h3> Não temos produtos com essa Categoria </h3>
 				</div>
 				<?php } ?>
 				<div class="lista-categorias col-lg-4 col-md-4 col-xs-4 col-sm-4">
						<?php get_sidebar(); ?>
				</div>
 
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_footer(); ?>