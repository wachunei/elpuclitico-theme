<?php
/*
Template Name: Opinion
*/

$paged = (get_query_var('paged')) ? (int) get_query_var('paged') : 1;
$page_link = get_permalink();
$categoria = "opinion";
$post_per_pagina = 6;

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			
			<?php 
			$query = new WP_Query('category_name=opinion&posts_per_page='.$post_per_pagina.'&paged='.$paged);
			if ( $query->have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php $i=1;while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php 
					/* ESTILO DIFERENTE PARA CUATRO PRIMEROS POSTS */
					if ($i==1 && !is_paged()):
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('opinion-topfeatured featured'); ?>>
					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
					<div class="opinion-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>

					</header><!-- .entry-header -->

					<div class="entry-summary">
						<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
							<?php the_post_thumbnail('plains-mini',array('class' => 'opinion-mini')); ?>
						</a>
			
						<?php the_excerpt(); ?>	

			
					</div><!-- .entry-summary -->
					<div class="entry-readmore">
							<p class="alignleft">
							<a href="<?php comments_link(); ?>" class="comments-link">Comentarios</a>
						</p>
							<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer »]</a></p>
						</div>
				</article>

			
				<?php elseif (($i==2 || $i==3) && !is_paged()): ?>

				<?php if($i==2): 
					$reportajealign = 'alignleft';
				?>
					<div>
				<?php elseif ($i==3): 
					$reportajealign = 'alignright';
				?>
				<?php endif;?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('featured featured-secondary opinion-featured opinion-secondary '.$reportajealign); ?>>
					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
					
					<div class="opinion-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>

					</header><!-- .entry-header -->

					<div class="entry-summary">
						<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
							<?php the_post_thumbnail('plains-mini',array('class' => 'opinion-mini alignleft')); ?>
						</a>
			
						<?php the_excerpt(); ?>	
						
					</div><!-- .entry-summary -->
					<div class="entry-readmore">
						<p class="alignleft">
							<a href="<?php comments_link(); ?>" class="comments-link">Comentarios</a>
						</p>
							<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer »]</a></p>
						</div>
			
				</article>

				<?php if ($i==3): 
				?>
					</div>
				<?php endif; ?>
				<?php elseif ($i==4 && !is_paged()) : ?>
					<div class="opinion-bottomfeatured-wrapper">
			

						
						<?php 
							$tiene_foto ="";
							if(has_post_thumbnail( $post->ID )):
							$tiene_foto = 'opinion-bottomfeatured-confoto';
							?>

						<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
							<?php the_post_thumbnail('plains-mini',array('class' => 'opinion-bottomfeatured-mini')); ?>
						</a>
						<?php endif;?>
			
					<article id="post-<?php the_ID(); ?>" <?php post_class('featured opinion-bottomfeatured '.$tiene_foto); ?>>
					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
					<div class="opinion-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>

					</header><!-- .entry-header -->

					<div class="entry-summary">
						
						<?php the_excerpt(); ?>	

			
					</div><!-- .entry-summary -->
					<div class="entry-readmore">
							<p class="alignleft">
							<a href="<?php comments_link(); ?>" class="comments-link">Comentarios</a>
						</p>
							<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer »]</a></p>
						</div>
				</article>
				</div>
				<div style="clear:both"></div>
				<?php else:?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
						
					<div class="opinion-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>
					

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
				<?php endif; ?>
				<?php $i++;endwhile; ?>


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