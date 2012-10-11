<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<?php $impreso = is_page('impreso'); ?>

<html xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

			?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo home_url()?>/wp-content/themes/toolbox/fonts/bebas-neue/stylesheet.css">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url()?>/favicon.ico">
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>


		<!-- Open Graph -->
		<?php
			$OG_titulo = get_the_title()." | ".get_bloginfo('name');
			$OG_url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
			$OG_type = 'website';
			$OG_image = get_bloginfo('url')."/logo_fb.png";
			$OG_desc = "El PUClítico es una iniciativa universitaria que busca servir como medio de noticias y opinión para toda la comunidad univesitaria dentro de la PUC. El equipo de El PUClítico está conformado principalmente por estudiantes de pregrado, sin embargo, también están involucrados estudiantes de posgrado y académicos. El PUClítico en definitiva un espacio de encuentro para la comunidad UC que busca aportar a la construcción de la identidad universitaria.";

			if(is_front_page()) {
				$OG_titulo = get_bloginfo('name')." | ".get_bloginfo('description');
			} elseif (is_single()){

				if (have_posts()):while(have_posts()):the_post();
				$OG_desc = esc_html(get_the_excerpt());
				$OG_url = get_permalink();
				$OG_type = 'article';
				if(has_post_thumbnail(get_the_ID())):
					$OG_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				endif;
				endwhile;endif;
				
			}
		?>

		<meta property="fb:app_id" content="337536439643550" /> 
		<!--<meta property="og:url" content="<?php echo $OG_url ?>" />-->
		<meta property="og:title" content="<?php echo $OG_titulo ?>" />
		<meta property="og:description" content="<?php echo $OG_desc ?>" />
		<meta property="og:image" content="<?php echo $OG_image ?>" />
		<meta property="og:type" content="<?php echo $OG_type ?>" />

		<!-- Script Google Analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-26431937-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>

	<body <?php body_class(); ?>>
		<!-- twitter button -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<!-- Google plus button -->
		<script type="text/javascript">
		  window.___gcfg = {lang: 'es'};

		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		<!-- Facebook Integration -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=337536439643550";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
					
		<div id="page" class="hfeed <?php if($impreso) { echo('impreso-page');} ?>">
			<div id="branding" role="banner" <?php if($impreso) { echo('class="impreso-branding"');} ?>>
				<div class="header-container" >
					<?php if(!$impreso) { ?>
					<a href="<?php echo home_url()?>"><img src="<?php bloginfo('template_url')?>/images/assets/logo.png" class="logo"/></a>
					<div class="logo-line"></div>
					<div id="logo-text">
						<?php
							if(single_cat_title( '', false ) != '') {
								echo "<span>".single_cat_title( '', false )."</span>";
							}
							else if($pagename != ''){
								echo "<span>".wp_title('',false,'')."</span>";
							}
							else { ?>
								<img src="<?php bloginfo('template_url')?>/images/assets/texto-completo-logo.png" />
						<?php } ?>
					</div>

					<!-- <div id="banner_evento">
						<a href="<?php echo home_url()?>/chile2112" title="Concurso: Chile 2012 en 100 palabras" class="full">
						<p><?php echo home_url()?></p>
						</a>

						<a href="#" class="boton_cerrar">Cerrar</a>		
					</div> -->
					<?php } /*!impreso */?>					

					<div id="access" role="navigation" <?php if($impreso) {echo('class="menu_impreso"');} ?>>
						
						<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
						<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>
						
						<?php if($impreso) { ?>
							<a href="<?php echo home_url()?>" class="link_logo_impreso" ><img src="<?php bloginfo('template_url')?>/images/assets/logo_impreso.png" class="logo_impreso"/></a>
						<?php } ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div><!-- #access (nav en HTML5)-->
				
				<?php get_search_form(); ?>
				</div>
			</div><!-- #branding (header en HTML5)-->

			<div id="main">