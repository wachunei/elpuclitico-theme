<?php
/*
Template Name: Portada
*/

get_header(); ?>
<div id="primary" class="portada">
	<div id="content" role="main">

	<div class="port-col col-left port-col-sola">
		<h3 class="port-sect-tit"><a href="opinion" title="Ir a la sección Opinión">Opinión</a></h3>
		
					
		<?php $query = new WP_Query('category_name=opinion&posts_per_page=1');
		if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>
			</div>
			
			<div class="entry-summary">
					<?php the_excerpt(); ?>	
			</div><!-- .entry-summary -->
			
			
			<div class="entry-readmore">
				<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer &raquo;]</a></p>
			</div>
		<?php endwhile; endif; wp_reset_query(); ?>
		<div class="port-sep"></div>
		
		<h3 class="port-sect-tit"><a href="participacion-uc" title="Ir a la sección Participación UC">Participación UC</a></h3>
		
	
		<?php $query = new WP_Query('category_name=participacion-uc&posts_per_page=1');
		if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post(); ?>
			
			
			<div class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</div>
			
			<div class="entry-summary">
<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
				<?php the_post_thumbnail('reportajes',array('class' => 'thumb-col')); ?>
			</a>
					<?php the_excerpt(); ?>	
			</div><!-- .entry-summary -->
			
			
			<div class="entry-readmore">
				<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer &raquo;]</a></p>
			</div>
		<?php endwhile; endif; wp_reset_query(); ?>

		
	</div>
	<div class="port-col-span col-right">
		
		<a href="impreso" class="link_impreso" title="Leer versión impresa"> <img src="<?php bloginfo('template_url')?>/images/assets/banner_impreso_1.png" /></a>
		
		<div class="port-reportaje">
		<h3 class="port-sect-tit"><a href="reportajes" title="Ir a la sección Reportajes">Reportaje</a></h3>
		<?php $query = new WP_Query('category_name=reportajes&posts_per_page=1');
		if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post(); ?>
			
			<?php the_post_thumbnail('reportajes-principal',array('class' => 'reportajes-principal')); ?>
			<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark" class="reportaje-link"></a>
					<div class="reportajes-caja-texto">
						<header class="entry-header">
							
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<div class="reportaje-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>

						</header><!-- .entry-header -->

						<div class="entry-summary">
							<?php the_excerpt(); ?>	
						</div><!-- .entry-summary -->
					</div>
		<?php endwhile; endif; wp_reset_query(); ?>
		</div>
	
		<div class="port-col col-left">
			<h3 class="port-sect-tit">Encuesta</h3>
			<?php if (function_exists('vote_poll')): ?>
			<div class="encuesta">
			<?php get_poll();?>
			</div>
			<div class="port-sep"></div>
			<?php endif; ?>
						
			<h3 class="port-sect-tit"><a href="plains" title="Ir a la sección Plains">Plains</a></h3>
			
			<?php $query = new WP_Query('category_name=plains&posts_per_page=1');
			if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</div>
			
				<div class="entry-summary">
					<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
				<?php the_post_thumbnail('reportajes',array('class' => 'thumb-col')); ?>
			</a>
						<?php the_excerpt(); ?>	
				</div><!-- .entry-summary -->
			
			
				<div class="entry-readmore">
					<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer &raquo;]</a></p>
				</div>
			<?php endwhile; endif; wp_reset_query(); ?>
			
		</div>
		<div class="port-col col-right">
			
			<h3 class="port-sect-tit">Síguenos</h3>
			
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/El-PUCl%C3%ADtico/190478194351754" data-width="290" data-height="80" data-show-faces="false" data-stream="false" data-header="true"></div>
			
			<a href="https://twitter.com/El_PUClitico" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @El_PUClitico</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			
			<div class="port-sep"></div>

			<h3 class="port-sect-tit">Lo más leído</h3>
			<div class="mas_leido">
			<?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("limit=3&range=weekly&order_by=views&post_type=post&excerpt_format=0&stats_comments=0&post_start=\"<li><span>»</span>\""); ?>
			</div>
		</div>
	</div>

	
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>