<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>
			</div><!-- #main -->

			<div id="colophon" role="contentinfo">
				<div id="site-generator">
					<div class="footer-container">
						<div id="footer-logo">
							<img src="<?php bloginfo('template_url')?>/images/assets/logo-footer.png" class="footer-img"/>
							<div class="footer-derechos">Todos los derechos reservados</div>
						</div>

						<div id="footer-secciones">
							<ul class="footer-ul">
								<li class="footer-li-separator"><a href="<?php echo home_url()?>/opinion">Opinión</a></li>
								<li class="footer-li-separator"><a href="<?php echo home_url()?>/participacion-uc">Participación UC</a></li>
								<li class="footer-li-separator"><a href="<?php echo home_url()?>/reportajes">Reportajes</a></li>
								<li class="footer-li-separator"><a href="<?php echo home_url()?>/plains">PLAINS</a></li>
								<li><a href="<?php echo home_url()?>/equipo">El equipo</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- #colophon (footer en HTML5)-->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<!-- Javascript Libraries -->
		<script src="<?php bloginfo('template_url')?>/js/main.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
		<?php if(is_front_page()) { ?>
		<script src="<?php bloginfo('template_url')?>/js/jquery.bxSlider.min.js"></script>
		<?php } ?>
	</body>
</html>