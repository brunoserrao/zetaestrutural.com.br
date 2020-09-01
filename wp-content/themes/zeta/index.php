<?php get_header(); ?>

	<?php 
		$quem_somos = get_post(2);
	?>

	<!-- HOME -->
	<div id="home" class="screen">
		<div class="screen-home">
			<div class="container">
				<div id="menu">
					<nav>
						<ul>
							<li>
								<div id="logo" class="flex-2">
									<a href="#home">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/images/zeta-engenharia.png" alt="Zeta Engenharia Estrutural">
										</figure>
									</a>
								</div>
							</li>
							<?php wp_nav_menu( array('menu' => 'Principal', 'container' => null, 'items_wrap'  => '%3$s')); ?>
						</ul>		
					</nav>
				</div>
				
				<div id="pedir-orcamento">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-mensagem.png" alt="">
					</figure>
					
					<a href="#contato" class="btn-contato">
						Solicite um orçamento
					</a>
				</div>

			</div>
		</div>
	</div>

	<!-- QUEM SOMOS -->
	<div id="quem-somos" class="screen">	
		<div class="screen-content">
			<h1 class="section-titulo"><?php echo $quem_somos->post_title; ?></h1>

			<div class="container">
				 <?php echo apply_filters('the_content', $quem_somos->post_content); ?>
			</div>

			<section class="menu-projetos">
				<div class="container-flex">
					<div class="column flex-1 flex-center">
						<a href="javascript:void(0);">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/quem-somos-projetos.png" alt="">
							</figure>
							Projetos
						</a>
					</div>

					<div class="column flex-1 flex-center">
						<a href="javascript:void(0);">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/quem-somos-projetos.png" alt="">
							</figure>
							Reforço <br /> Estrutural
						</a>
					</div>

					<div class="column flex-1 flex-center">
						<a href="javascript:void(0);">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/quem-somos-projetos.png" alt="">
							</figure>
							Verificação de <br /> Projeto
						</a>
					</div>
				</div>
			</section>
		</div>
		<?php wp_reset_query(); ?>
	</div>

	<!-- PROJETOS -->
	<div id="projetos" class="screen">
		<div class="screen-content">
			<h1 class="section-titulo texto-branco">
				Nossos projetos
			</h1>

			<div class="container">
				<ul id="projetos-submenu" class="flex-1">
					<?php wp_nav_menu( array('menu' => 'Projetos', 'container' => null, 'items_wrap'  => '%3$s')); ?>
				</ul>
			</div>

			<div class="container">
				<div id="projetos-posts">
					<?php get_template_part('category-5') ?>
				</div>
			</div>
		</div>
	</div>

	<!-- EQUIPE -->	
	<div id="equipe" class="screen">
		<div class="screen-content">
			<h1 class="section-titulo texto-branco">
				Nossa Equipe
			</h1>

			<ul id="equipe-container">
				<?php get_template_part('category-equipe') ?>
			</ul>
			
		</div>
	</div>

	<!-- CONTATO -->
	<div id="contato" class="screen">
		<div class="screen-content">
			<h1 class="section-titulo texto-branco">
				Contato
			</h1>
			
			<div id="contato-content" class="flex-1">
				<div class="textos flex-1 texto-verde">
					<ul>
						<li>+55 82 3436-5514</li>
						<li>contato@zetaestrutural.com.br</li>
						<li>
							<a href="https://www.facebook.com/zeta.estrutural" target="_blank" title="Facebook" class="facebook">
								<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook">
							</a>
						</li>
					</ul>
				</div>

				<!-- <div class="flex-1 texto-branco">
					<?php // echo do_shortcode('[contact-form-7 id="49" title="Formulário de contato"]') ?>	
				</div> -->
			</div>
		</div>
	</div>

<?php get_footer(); ?>