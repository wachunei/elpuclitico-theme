<?php
/*
Template Name: Participación UC
*/

$paged = (get_query_var('paged')) ? (int) get_query_var('paged') : 1;
$page_link = get_permalink();
$categoria = "participacion-uc";
$post_per_pagina = 5;

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			
			<?php 
			$query = new WP_Query('category_name='.$categoria.'&posts_per_page='.$post_per_pagina.'&paged='.$paged);
			if ( $query->have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
					</header><!-- .entry-header -->

					<div class="entry-summary">
						<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
							<?php the_post_thumbnail('plains-mini',array('class' => 'opinion-mini')); ?>
						</a>
			
						<?php the_excerpt(); ?>	
						<div class="entry-readmore">
							<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer »]</a></p>
						</div>
			
					</div><!-- .entry-summary -->
				</article>
				<?php endwhile; ?>


				<div class="paginacion">
					<?php 
					$query_nav = new WP_Query('category_name='.$categoria.'&posts_per_page='.$post_per_pagina.'&paged='.($paged+1)); 
					if($query_nav->have_posts()):
					?>
					<span class="previous">
						<a href="<?php echo $page_link ?>page/<?php echo $paged + 1; ?>">« Página Anterior</a>
					</span>
					<?php endif; ?>
					<?php if($paged != 1): ?>
					<span class="next">
						<a href="<?php echo $page_link ?>page/<?php echo $paged - 1; ?>">Página Siguiente »</a>
					</span>
					<?php endif; ?>
				</div>
				

			<?php else : ?>
			
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'No hay noticias relacionadas', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Lo sentimos mucho. Aún no tenemos noticias asociadas a esta categoría.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; 
				wp_reset_postdata();
			?>

			</div><!-- #content -->
		</section><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>