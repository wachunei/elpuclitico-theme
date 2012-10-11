<?php
/*
Template Name: Debate Listas
*/

get_header(); ?>
	<div class="barra-azul"></div>
	<div class="barra-azul-mini"></div>
	<div id="nav-movimientos">
		<ul>
			<li><a id="oi" href="/feuc-2012/movimientos/oi">0I</a></li>
			<li><a id="1a" href="/feuc-2012/movimientos/1a-gremial">1A-Gremial</a></li>
			<li><a id="caridad" href="/feuc-2012/movimientos/caridad">Caridad</a></li>
			<li><a id="crecer" href="/feuc-2012/movimientos/crecer">Crecer</a></li>			
			<li><a id="indep" href="/feuc-2012/movimientos/independientes/quienes-son">Independientes</a></li>
			<li><a id="nau" href="/feuc-2012/movimientos/nau">NAU</a></li>			
			<li><a id="sdd" href="/feuc-2012/movimientos/solidaridad">Solidaridad</a></li>
		</ul>
	</div><!-- #nav-movimientos -->

		<div id="primary">
			<div id="content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="barra-menu-feuc"></div>
				<?php $movs = split('/',get_permalink($post->ID)); ?>
				<div id="nav-feuc">
					<ul>
						<li><a id="ranking-impacto-ambiental" href="<?php echo ($movs[4] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>ranking-impacto-ambiental">Ranking Impacto Ambiental</a></li>
						<li><a id="ranking-transparencia" href="<?php echo ($movs[4] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>ranking-transparencia">Ranking Transparencia</a></li>
						<li><a id="elecciones-2010" href="<?php echo ($movs[4] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>elecciones-2010">Elecciones 2010</a></li>
					</ul>

				</div><!-- #nav-movimientos -->
				<script type="text/javascript">
					jQuery(function(){	
						jQuery('#logo-text').text('Feuc 2012');
				<?php
					switch($movs[4]){
						case 'ranking-impacto-ambiental': ?>							
							jQuery('#ranking-impacto-ambiental').css('color','#4B8DBC');
							jQuery('#ranking-impacto-ambiental').parent().addClass('flecha-azul-menu');
							jQuery('#ranking-list').css('margin-left','0px');

						<?php	break;
						case 'ranking-transparencia': ?>
							jQuery('#ranking-transparencia').css('color','#4B8DBC');
							jQuery('#ranking-transparencia').parent().addClass('flecha-azul-menu');
							jQuery('#ranking-list').css('margin-left','240px');
							
						<?php	break;
						case 'elecciones-2010': ?>
							jQuery('#elecciones-2010').css('color','#4B8DBC');
							jQuery('#elecciones-2010').parent().addClass('flecha-azul-menu');
							
						<?php	break;						
					}					
				?>	});</script>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<script type="text/javascript">
	jQuery(function(){
		jQuery('#primary').css("margin-top","0px");
		jQuery('.widget-area').css("margin-top","4px");
	});
	
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>