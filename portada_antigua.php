<?php
/*
Template Name: Portada Antigua
*/

get_header(); ?>
<div id="primary">
	<div id="content" role="main">

		<div id="main-news">
			<ul class="slider">
				<li>
				<?php
					// Categoría Reportajes
					add_filter( 'post_limits', 'my_post_limits' );
					$args=array(
					  'category_name' => 'reportajes',
					  'orderby' => 'date',
					  'order' => 'DESC',
					  'nopaging' => 'true'
					);
					$the_query = new WP_Query( $args );
					if( have_posts() ) : 
					    // The Loop
					    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						    <?php
							    $args = array(
								   'post_type' => 'attachment',
								   'numberposts' => 1,
								   'post_status' => null,
								   'post_parent' => $post->ID
								  );

									$attachments = get_posts( $args );
								    if ( $attachments ) {
								    	foreach ( $attachments as $attachment ) {
								        	the_attachment_link( $attachment->ID, true );
										}
									}?>

						  	<?php endwhile; ?>
							<div class="main-content">
								<p class="main-category">Reportajes</p>
								<a href="<?php the_permalink()?>">

							    <p class='main-title'><?php the_title()?></p>
							    <span class="main-text">	 
									<?php the_excerpt()?>
								</span>
								</a>
							</div>							
						<?php 
						endif;
					// Reset Post Data
					wp_reset_postdata();
				?>
				</li>
				<li>
				<?php

					// Categoría Opinión
					add_filter( 'post_limits', 'my_post_limits' );
					$args=array(
					  'category_name' => 'opinion',
					  'orderby' => 'date',
					  'order' => 'DESC',
					  'nopaging' => 'true'
					);
					$the_query = new WP_Query( $args );
					if( have_posts() ) : 
					    // The Loop
					    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						    <?php
							    $args = array(
								   'post_type' => 'attachment',
								   'numberposts' => 1,
								   'post_status' => null,
								   'post_parent' => $post->ID
								  );

									$attachments = get_posts( $args );
								    if ( $attachments ) {
								    	foreach ( $attachments as $attachment ) {
								        	the_attachment_link( $attachment->ID, true );
										}
									}?>

						  	<?php endwhile; ?>
							<div class="main-content">
								<div class="main-category">Opinión</div>
								<a href="<?php the_permalink()?>">
							    <div class='main-title'><?php the_title()?></div>
							    <div class="main-text">	 
									<?php the_excerpt()?>
								</div>
								</a>
							</div>							
						<?php 
						endif;
					// Reset Post Data
					wp_reset_postdata();
				?>
				</li>
				<li>
				<?php
					// Categoría Participación UC
					add_filter( 'post_limits', 'my_post_limits' );
					$args=array(
					  'category_name' => 'participacion-uc',
					  'orderby' => 'date',
					  'order' => 'DESC',
					  'nopaging' => 'true'
					);
					$the_query = new WP_Query( $args );
					if( have_posts() ) : 
					    // The Loop
					    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						    <?php
							    $args = array(
								   'post_type' => 'attachment',
								   'numberposts' => 1,
								   'post_status' => null,
								   'post_parent' => $post->ID
								  );

									$attachments = get_posts( $args );
								    if ( $attachments ) {
								    	foreach ( $attachments as $attachment ) {
								        	the_attachment_link( $attachment->ID, true );
										}
									}?>

						  	<?php endwhile; ?>
							<div class="main-content">
								<div class="main-category">Participación UC</div>
								<a href="<?php the_permalink()?>">
							    <div class='main-title'><?php the_title()?></div>
							    <div class="main-text">	 
									<?php the_excerpt()?>
									<a href="<?php the_permalink()?>">[ver +]</a>
								</div>
								</a>
							</div>							
						<?php 
						endif;
					// Reset Post Data
					wp_reset_postdata();
				?>
				</li>			
			</ul>	
			<div class="pages">
				<ul>
					<li><span class="slide-prev"></span></li>
					<li><a class="slide-change active" data-slide="0">1</a></li>
					<li><a class="slide-change" data-slide="1">2</a></li>
					<li><a class="slide-change" data-slide="2">3</a></li>
					<li><span class="slide-next"></span></li>
				</ul>
			</div>				
		</div>
		<div>
			<div id="plains">
				<div class="portada-subtitulo">PLAINS</div>
				<div id="plains-desc">
					<b>PLAINS</b> es la Plataforma de Iniciativas Sociales donde podrás encontrar las distintas alternativas de voluntariado donde puedes participar.
				</div>
				<div id="weekly-plains-title">Últimos publicados</div>
				<div id="weekly-plains">
				<?php
					// The Query
				    add_filter( 'post_limits', 'my_post_limits' );
				    $args=array(
				      'category_name' => 'plains',
				      'orderby' => 'date',
				      'order' => 'DESC',
				      'nopaging' => 'true'
				    );
				    $the_query = new WP_Query( $args );
				    if( have_posts() ) : 
					    // The Loop
					    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					      <div class='plains-title'><?php the_title()?></div>
					      <div class="plains-content">
					      	 <?php
					      		$args = array(
									   'post_type' => 'attachment',
									   'numberposts' => 1,
									   'post_status' => null,
									   'post_parent' => $post->ID
									  );

									  $attachments = get_posts( $args );
									     if ( $attachments ) {
									        foreach ( $attachments as $attachment ) {
									           the_attachment_link( $attachment->ID, false );
									          }
									     }?>

							    <?php endwhile; ?>
						      
						      <div class='plains-text'>
						      	<?php the_excerpt()?>
						      	<a href="<?php the_permalink()?>">[ver +]</a>
						      </div>

					      </div>
					<?php     					      
						else :
							// No info
							?>
							<div class='plains-title'>No hemos agregado información de PLAINS aún. ¡Ya tendremos proximamente!</div>
						<?php 
						endif;
				    // Reset Post Data
				    wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>