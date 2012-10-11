<?php
/*
Template Name: FEUC Movimientos
*/

get_header(); ?>
	<div class="barra-azul"></div>
	<div class="barra-azul-mini"></div>
	<div id="nav-movimientos">
		<ul>
			<li><a id="oi" href="<?php echo home_url()?>/feuc-2012/movimientos/oi">OI</a></li>
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
				<img class="detalle-left-triangle" />
				<div class="detalle-left-block"></div>
				<div class="detalle-left-line"></div>
				<div id="nav-detalle">
					<ul>
						<?php 
							$movs = explode('/',(substr(get_permalink($post->ID), strlen(home_url()) + 1)));
						?>
						<li><a id="quienes-son" href="<?php echo ($movs[3] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>quienes-son">Quiénes son</a></li>
						<?php 							
							if($movs[2] != 'independientes'){
						?>
						<li><a id="que-proponen" href="<?php echo ($movs[3] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>que-proponen">Qué proponen</a></li>
						<li><a id="3-proy" href="<?php echo ($movs[3] != '') ? get_permalink( $post->post_parent ) : get_permalink( $post->ID )?>3-proyectos-principales">3 proyectos principales</a></li>
						<?php } ?>
					</ul>

				</div><!-- #nav-movimientos -->
				<script type="text/javascript">
					jQuery(function(){	
						jQuery('#logo-text').text('Feuc 2012');
				<?php
					 					
					switch($movs[2]){
						case 'caridad': ?>							
							jQuery('#nav-detalle').css('background-color','#EAC902');
							jQuery('.detalle-left-line').css('background-color','#EAC902');	
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-caridad.png');
							jQuery('.detalle-left-block').css('background-color','#EAC902');
							jQuery('#caridad').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-caridad');

						<?php	break;
						case 'crecer': ?>
							jQuery('#nav-detalle').css('background-color','#368D43');
							jQuery('.detalle-left-line').css('background-color','#368D43');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-crecer.png');
							jQuery('.detalle-left-block').css('background-color','#368D43');
							jQuery('#crecer').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-crecer');
							
						<?php	break;
						case '1a-gremial': ?>
							jQuery('#nav-detalle').css('background-color','#F47D40');
							jQuery('.detalle-left-line').css('background-color','#F47D40');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-1a.png');
							jQuery('.detalle-left-block').css('background-color','#F47D40');
							jQuery('#1a').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-1a');
							
						<?php	break;
						case 'independientes': ?>
							jQuery('#nav-detalle').css('background-color','#92278F');
							jQuery('.detalle-left-line').css('background-color','#92278F');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-indep.png');
							jQuery('.detalle-left-block').css('background-color','#92278F');
							jQuery('#indep').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-indep');
							
						<?php	break;
						case 'nau': ?>
							jQuery('#nav-detalle').css('background-color','#9AC03C');
							jQuery('.detalle-left-line').css('background-color','#9AC03C');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-nau.png');
							jQuery('.detalle-left-block').css('background-color','#9AC03C');
							jQuery('#nau').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-nau');

						<?php	break;
						case 'oi': ?>
							jQuery('#nav-detalle').css('background-color','#41A1F4');
							jQuery('.detalle-left-line').css('background-color','#41A1F4');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-oi.png');
							jQuery('.detalle-left-block').css('background-color','#41A1F4');
							jQuery('#oi').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-oi');
							
						<?php	break;
						case 'solidaridad': ?>
							jQuery('#nav-detalle').css('background-color','#DF2426');
							jQuery('.detalle-left-line').css('background-color','#DF2426');
							jQuery('.detalle-left-triangle').attr('src','<?php bloginfo('template_url')?>/images/assets/triangulo-sdd.png');
							jQuery('.detalle-left-block').css('background-color','#DF2426');
							jQuery('#sdd').css('opacity','1');
							jQuery('#nav-detalle ul li a').addClass('col-sdd');
							
						<?php	break;						
						
					}
					switch($movs[3]){
						case 'quienes-son': ?>
							jQuery('#quienes-son').css('color','white');
							jQuery('#quienes-son').parent().addClass('flecha-menu');
							
						<?php	break;
						case 'que-proponen': ?>
							jQuery('#que-proponen').css('color','white');
							jQuery('#que-proponen').parent().addClass('flecha-menu');
							
						<?php	break;
						case '3-proyectos-principales': ?>
							jQuery('#3-proy').css('color','white');
							jQuery('#3-proy').parent().addClass('flecha-menu');
							
						<?php	break;										
						
					}
					
				?>	});</script>



					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<script type="text/javascript">
	//alert(jQuery("#nav-movimientos ul li a").attr('href'));
	jQuery(function(){
		jQuery('#primary').css("margin-top","0px");
		jQuery('.widget-area').css("margin-top","4px");
	});

	jQuery(function(){
		jQuery('#superior').hide();
		jQuery('#territoriales').hide();
		jQuery('#directiva-li').addClass('col-quienes-selected');
		jQuery('#superior-li').addClass('col-quienes-deselected');
		jQuery('#territoriales-li').addClass('col-quienes-deselected');


		jQuery('#directiva-li').mouseover(function(){
			jQuery('#directiva-li').addClass('col-quienes-selected');
			jQuery('#directiva-li').removeClass('col-quienes-deselected');
			jQuery('#superior-li').removeClass('col-quienes-selected');
			jQuery('#territoriales-li').removeClass('col-quienes-selected');
			jQuery('#superior-li').addClass('col-quienes-deselected');
			jQuery('#territoriales-li').addClass('col-quienes-deselected');

			jQuery('#directiva').slideDown();
			jQuery('#superior').hide();
			jQuery('#territoriales').hide();
		});
		jQuery('#superior-li').mouseover(function(){
			jQuery('#directiva-li').addClass('col-quienes-deselected');
			jQuery('#directiva-li').removeClass('col-quienes-selected');
			jQuery('#superior-li').removeClass('col-quienes-deselected');
			jQuery('#territoriales-li').removeClass('col-quienes-selected');
			jQuery('#superior-li').addClass('col-quienes-selected');
			jQuery('#territoriales-li').addClass('col-quienes-deselected');

			jQuery('#superior').slideDown();
			jQuery('#directiva').hide();
			jQuery('#territoriales').hide();
		});
		jQuery('#territoriales-li').mouseover(function(){
			jQuery('#directiva-li').addClass('col-quienes-deselected');
			jQuery('#directiva-li').removeClass('col-quienes-selected');
			jQuery('#superior-li').removeClass('col-quienes-selected');
			jQuery('#territoriales-li').removeClass('col-quienes-deselected');
			jQuery('#superior-li').addClass('col-quienes-deselected');
			jQuery('#territoriales-li').addClass('col-quienes-selected');

			jQuery('#territoriales').slideDown();
			jQuery('#superior').hide();
			jQuery('#directiva').hide();
		});
		
	});
	
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>