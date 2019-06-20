<?php get_header(); ?>
			
	<div id="content">

		<div id="pg-featured-article-banner" class="large-12">
					
					<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Article News Page');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					
				<div class="grid-container">
				<div class="grid-x">
					   <article class="">
					   	<!-- custom thumbnail size 600px wide -->
								<div class="columns" id="featured-article-title-container">
								<div class="large-10 large-centered columns" id="fatured-article-title-inner-container">	
								<div id="featured-image-banner-container">
									<section id="featured-image-banner" itemprop="articleBody">
									<?php the_post_thumbnail('full'); ?>
								    </section>
								</div>
								<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?>
						        <a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Ler mais</a>
						        </div>
								</div>
						      
					    </article>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					/*else {
						 get_sidebar();
					}*/
					?>

				</div>
			</div>

			</div>
			<div id="pg-news-container" class="grid-container">
			  <div class="grid-x grid-margin-x">
				<div class="large-8 cell">
			    <h1>Notícias</h1>
			    </div>
			    <div class="sidebar large-4 medium-5 small-12 columns end" role="complementary">
				  
				   <!-- <div id="sidebar-news" class="large-12 medium-12 small-12 columns">
					<h2 class="text-center" id="event-bar-title"></h2> 
			          <?php $terms = get_terms('article_cat');
						echo '<ul id="event-cat-sidebar" class="text-center">';
						 foreach ($terms as $term) {
						 echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						  }
						echo '</ul>';
					  ?>
				   </div>
				  </div> -->
			  </div>
			</div>
			 

			  	<div class="grid-container">	
			    <div id="news-grid-feed" class="grid-x grid-margin-x">
			   
			    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
									    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
										
					<?php else : ?>
																
						<?php get_template_part( 'parts/content', 'missing' ); ?>
											
					<?php endif; ?>
	
			    </div><!-- end #news-grid-feed -->
			</div>
		

	</div> <!-- end #content-->

<?php get_footer(); ?>