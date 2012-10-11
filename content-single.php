<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php if(in_category('opinion')): ?>
	<div class="opinion-alert" style="display:none;">
		<p class="opinion-alert-text">Las opiniones emitidas en este sitio son de exclusiva responsabilidad de 
los autores de las columnas y no representan necesariamente el pensar 
de El PUClítico.</p>
		<p class="opinion-alert-undo">Esta advertencia no se volverá a mostrar. <a href="#">Deshacer</a></p>
	<a href="#" class="cerrar-opinion-alert">Cerrar</a>
	</div>

<?php endif;?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single">
		<div class="entry-meta">
			<?php toolbox_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h1 class="single-entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if(in_category('opinion') || in_category('reportajes')): ?>

		<div class="opinion-autor"><span>por</span> <?php echo get_post_meta($post->ID, "autor_opinion", true); ?></div>

		<?php endif;?>


		<?php if(in_category('opinion') || in_category('reportajes')): ?>

		<div class="entry-header-summary">
			<?php the_excerpt(); ?>
		</div>
		<?php endif;?>
		
		<div class="entry-header-social">
			
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="El_PUClitico" data-lang="es" data-related="El_PUClitico">Twittear</a>

			<fb:like href="<?php the_permalink()?>" send="false" layout="button_count"  show_faces="false" font="segoe ui"></fb:like>
			
			<g:plusone size="medium" href="<?php the_permalink()?>"></g:plusone>

		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
	
		<?php 
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'toolbox' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '<p class="tag_list">',' ', '</p>');
			
			echo($tag_list);
		?>

		<?php edit_post_link( "Editar post", '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
