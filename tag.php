<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Archivo de la etiqueta: %s', 'toolbox' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>

					<?php
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
					?>
				</header>

				<?php rewind_posts(); ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

		<div class="plains-wrapper">
					<a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark">
							<?php the_post_thumbnail('plains-mini',array('class' => 'tags-mini')); ?>
						</a>
				<article id="post-<?php the_ID(); ?>" <?php post_class('plains-post'); ?>>
					

					<header class="entry-header">
						<?php if ( 'post' == get_post_type() ) : ?>
							<div class="entry-meta">
								<?php toolbox_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
					</header><!-- .entry-header -->

					<div class="entry-summary">
						
			
						<?php the_excerpt(); ?>	
						<div class="entry-readmore">
							<p><a href="<?php the_permalink() ?>" title="Leer <?php the_title('&#8220;','&#8221;')?>">[leer &raquo;]</a></p>
						</div>
			
					</div><!-- .entry-summary -->
				</article>
				</div>
				<div style="clear:both;"></div>
				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>