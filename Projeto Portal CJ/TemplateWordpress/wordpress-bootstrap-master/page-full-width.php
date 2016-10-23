<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

<section class="container">			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-12 clearfix conteudoP" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1 class="col-md-offset-2 titulo"><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="texto margin-bottom col-md-8 col-md-offset-2 text-center">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Não encontrado!", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Desculpe, mas o recurso solicitado não foi encontrado neste portal.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
</section> <!-- Fim do Conteúdo -->
<?php get_footer(); ?>