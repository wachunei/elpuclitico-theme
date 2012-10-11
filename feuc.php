<?php
/*
Template Name: FEUC
*/

get_header(); ?>
	<div class="barra-azul"></div>
	<div class="barra-azul-mini"></div>
	<div id="nav-movimientos">
		<ul>
			<li><a id="oi" href="<?php echo home_url()?>/feuc-2012/movimientos/oi">0I</a></li>
			<li><a id="1a" href="<?php echo home_url()?>/feuc-2012/movimientos/1a-gremial">1A-Gremial</a></li>
			<li><a id="caridad" href="<?php echo home_url()?>/feuc-2012/movimientos/caridad">Caridad</a></li>
			<li><a id="crecer" href="<?php echo home_url()?>/feuc-2012/movimientos/crecer">Crecer</a></li>			
			<li><a id="indep" href="<?php echo home_url()?>/feuc-2012/movimientos/independientes/quienes-son">Independientes</a></li>
			<li><a id="nau" href="<?php echo home_url()?>/feuc-2012/movimientos/nau">NAU</a></li>			
			<li><a id="sdd" href="<?php echo home_url()?>/feuc-2012/movimientos/solidaridad">Solidaridad</a></li>
		</ul>
	</div><!-- #nav-movimientos -->

		<div id="primary">
			<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="barra-menu-feuc"></div>
				<?php $movs = explode('/',(substr(get_permalink($post->ID), strlen(home_url()) + 1))); ?>
				<?php echo $movs[2]; ?>
				<div id="nav-feuc">
					<ul>
						
						<li><a id="ranking-impacto-ambiental" href="<?php echo ($movs[1] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>ranking-impacto-ambiental">Ranking Impacto Ambiental</a></li>
						<li><a id="ranking-transparencia" href="<?php echo ($movs[1] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>ranking-transparencia">Ranking Transparencia</a></li>
						<li><a id="elecciones-2010" href="<?php echo ($movs[1] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>elecciones-2010">Elecciones 2010</a></li>
					</ul>

				</div><!-- #nav-movimientos -->
				<script type="text/javascript">
					jQuery(function(){	
						jQuery('#logo-text').text('Feuc 2012');
				<?php
					switch($movs[1]){
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

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<script type="text/javascript">
	jQuery(function(){
		jQuery('#primary').css("margin-top","0px");
		jQuery('.widget-area').css("margin-top","4px");
		jQuery('#mensaje-publicacion').hide();
		jQuery('#xmt_wgt-3').hide();
		jQuery('#xmt_wgt-5').show();
	});

	jQuery(function(){
		jQuery('#criterios').hide();
		jQuery('#pre-analisis').hide();
		jQuery('#resultados-li').addClass('col-quienes-selected');
		jQuery('#criterios-li').addClass('col-quienes-deselected');
		jQuery('#pre-analisis-li').addClass('col-quienes-deselected');				


		jQuery('#resultados-li').mouseover(function(){
			jQuery('#resultados-li').addClass('col-quienes-selected');
			jQuery('#resultados-li').removeClass('col-quienes-deselected');
			jQuery('#criterios-li').removeClass('col-quienes-selected');
			jQuery('#criterios-li').addClass('col-quienes-deselected');
			jQuery('#pre-analisis-li').removeClass('col-quienes-selected');
			jQuery('#pre-analisis-li').addClass('col-quienes-deselected');

			jQuery('#resultados').slideDown();
			jQuery('#criterios').hide();
			jQuery('#pre-analisis').hide();
		});
		jQuery('#criterios-li').mouseover(function(){
			jQuery('#criterios-li').removeClass('col-quienes-deselected');
			jQuery('#criterios-li').addClass('col-quienes-selected');
			jQuery('#resultados-li').addClass('col-quienes-deselected');
			jQuery('#resultados-li').removeClass('col-quienes-selected');
			jQuery('#pre-analisis-li').removeClass('col-quienes-selected');
			jQuery('#pre-analisis-li').addClass('col-quienes-deselected');

			jQuery('#criterios').slideDown();
			jQuery('#resultados').hide();
			jQuery('#pre-analisis').hide();
		});

		jQuery('#pre-analisis-li').mouseover(function(){
			jQuery('#pre-analisis-li').removeClass('col-quienes-deselected');
			jQuery('#pre-analisis-li').addClass('col-quienes-selected');
			jQuery('#resultados-li').addClass('col-quienes-deselected');
			jQuery('#resultados-li').removeClass('col-quienes-selected');
			jQuery('#criterios-li').removeClass('col-quienes-selected');
			jQuery('#criterios-li').addClass('col-quienes-deselected');

			jQuery('#pre-analisis').slideDown();
			jQuery('#resultados').hide();
			jQuery('#criterios').hide();
		});

		jQuery('#directiva-nau').hide();
		jQuery('#directiva-sdd').hide();
		jQuery('#directiva-oi').hide();
		jQuery('#directiva-crecer').hide();
		jQuery('#directiva-1a').hide();
		jQuery('#directiva-caridad').hide();
		jQuery('#directiva-nulos').hide();
		jQuery('#directiva-blancos').hide();

		jQuery('#cs-nau').hide();
		jQuery('#cs-sdd').hide();
		jQuery('#cs-oi').hide();
		jQuery('#cs-1a').hide();
		jQuery('#cs-crecer').hide();
		jQuery('#cs-nulos').hide();
		jQuery('#cs-blancos').hide();

		jQuery('#directiva-2010').hover(
			function(){
				jQuery('#directiva-nau').fadeIn();
				jQuery('#directiva-sdd').fadeIn();
				jQuery('#directiva-oi').fadeIn();
				jQuery('#directiva-1a').fadeIn();
				jQuery('#directiva-caridad').fadeIn();
			},
			function(){
				jQuery('#directiva-nau').fadeOut('fast');
				jQuery('#directiva-sdd').fadeOut('fast');
				jQuery('#directiva-oi').fadeOut('fast');
				jQuery('#directiva-1a').fadeOut('fast');
				jQuery('#directiva-caridad').fadeOut('fast');
			}
		);

		jQuery('#cs-2010').hover(
			function(){
				jQuery('#cs-nau').fadeIn();
				jQuery('#cs-sdd').fadeIn();
				jQuery('#cs-oi').fadeIn();
				jQuery('#cs-1a').fadeIn();
				jQuery('#cs-crecer').fadeIn();
			},
			function(){
				jQuery('#cs-nau').fadeOut('fast');
				jQuery('#cs-sdd').fadeOut('fast');
				jQuery('#cs-oi').fadeOut('fast');
				jQuery('#cs-1a').fadeOut('fast');
				jQuery('#cs-crecer').fadeOut('fast');
			}
		);

		jQuery('#directiva-2011').hover(
			function(){
				jQuery('#directiva-nau').fadeIn();
				jQuery('#directiva-sdd').fadeIn();
				jQuery('#directiva-crecer').fadeIn();
				jQuery('#directiva-1a').fadeIn();
				jQuery('#directiva-caridad').fadeIn();
				jQuery('#directiva-nulos').fadeIn();
				jQuery('#directiva-blancos').fadeIn();
			},
			function(){
				jQuery('#directiva-nau').fadeOut('fast');
				jQuery('#directiva-sdd').fadeOut('fast');
				jQuery('#directiva-crecer').fadeOut('fast');
				jQuery('#directiva-1a').fadeOut('fast');
				jQuery('#directiva-caridad').fadeOut('fast');
				jQuery('#directiva-nulos').fadeOut('fast');
				jQuery('#directiva-blancos').fadeOut('fast');
			}
		);

		jQuery('#cs-2011').hover(
			function(){
				jQuery('#cs-nau').fadeIn();
				jQuery('#cs-sdd').fadeIn();
				jQuery('#cs-1a').fadeIn();
				jQuery('#cs-crecer').fadeIn();
				jQuery('#cs-nulos').fadeIn();
				jQuery('#cs-blancos').fadeIn();
			},
			function(){
				jQuery('#cs-nau').fadeOut('fast');
				jQuery('#cs-sdd').fadeOut('fast');
				jQuery('#cs-1a').fadeOut('fast');
				jQuery('#cs-crecer').fadeOut('fast');
				jQuery('#cs-nulos').fadeOut('fast');
				jQuery('#cs-blancos').fadeOut('fast');
			}
		);
		
	});
	
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>