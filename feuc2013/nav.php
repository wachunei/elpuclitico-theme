<?php function base() { echo get_bloginfo('url'); } ?>
<div id="feuc2013-menu-container">
	<ul id="feuc2013-menu">
		<li<?php if(is_page('estadisticas-pasadas')){ echo(' class="activo" ');} ?>><a href="<?php base(); ?>/feuc2013/estadisticas-pasadas" title="Estadísticas Pasadas">Estadísticas Pasadas</a></li>
		<li<?php if(is_page('analisis')){ echo(' class="activo" ');} ?>><a href="<?php base(); ?>/feuc2013/analisis" title="Inicio">Análisis</a></li>
		<li<?php if(is_page('tys')){ echo(' class="activo" ');} ?>><a href="<?php base(); ?>/feuc2013/tys" title="Inicio">Transparencia/Sustentabilidad</a></li>
		<li<?php if(is_page('conteo')){ echo(' class="activo" ');} ?>><a href="<?php base(); ?>/feuc2013/conteo" title="Inicio">Conteo</a></li>

		

	</ul>
	
	
	<ul id="feuc2013-candidatos">
		<li class="oi<?php if(is_page('oi')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/oi" title="Candidatura Opción Independiente">Opción independiente</a></li>
		<li class="unoa<?php if(is_page('1a')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/1a" title="Candidatura 1a">1a</a></li>
		<li class="caridad<?php if(is_page('caridad')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/caridad" title="Candidatura caridad">Caridad</a></li>
		<li class="crecer<?php if(is_page('crecer')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/crecer" title="Candidatura crecer">Crecer</a></li>
		<li class="nau<?php if(is_page('nau')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/nau" title="Candidatura NAU">NAU</a></li>
		<li class="red<?php if(is_page('red')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/red" title="Candidatura RED">RED</a></li>
		<li class="solidaridad<?php if(is_page('solidaridad')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/solidaridad" title="Candidatura Solidaridad">Solidaridad</a></li>
		<li class="independientes<?php if(is_page('independientes')){ echo(" activo");} ?>"><a href="<?php base(); ?>/feuc2013/independientes" title="Candidaturas independientes">Independientes</a></li>
	</ul>
</div>