<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to toolbox_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>
	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'toolbox' ); ?></p>
	</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>
	<?php if(is_page('feuc-2012')) {?>
		<h2 id="comments-title">
			<fb:comments-count href="<?php the_permalink()?>"></fb:comments-count> Comentarios
		</h2>

		<div class="fb-comments" data-href="<?php the_permalink()?>" data-num-posts="20" data-width="600"></div>
	<?php } ?>	

	<?php if(is_single()): ?>
	
		<?php if(!comments_open()): ?>
		<h2 id="comments-title" class="closed-comments">
			Comentarios Cerrados
		</h2>

		<? else: ?>
		<h2 id="comments-title">
			<fb:comments-count href="<?php the_permalink()?>"></fb:comments-count> Comentarios
		</h2>

		<fb:comments href="<?php the_permalink()?>" num_posts="20" width="600"></fb:comments>

		<?php endif;?>

	<?php endif; ?> 


</div><!-- #comments -->
