<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e("Desculpe, não houve resultados", "jointswp");?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Tente novamente com outras opções de busca.", "jointswp");?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
			<p><?php _e("Esta é a mensagem de erro nas partes modelo"); ?></p>
		</footer>  
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e("Opa, Page Not Found!", "jointstheme"); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Uh oh. Algumas coisas estão faltando, verifique e tente novamente.", "jointstheme"); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
		  <p><?php _e("Esta é a mensagem de erro nas partes modelo"); ?></p>
		</footer>
			
	<?php endif; ?>
	
</div>
