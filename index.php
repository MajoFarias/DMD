<?php
$title = "¡LANZAMIENTO SOLIDWORKS® 2017!";
include('header.php');
$is_home_page = true;
?>


<section class="eyecatcher">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox"> 
			<div class="item active item-video">
				<video id="bgvid" playsinline="" autoplay="" muted="" loop="">
				<source src="assets/images/video1.mp4" type="video/mp4">
				</video>
				<div class="carousel-caption">
					<h1>Conoce SOLIDWORKS<sup>®</sup> 2017</h1>
					<h2>The power you need to drive innovation</h2>
					<h3>Descubre el nuevo poder y desempeño de SOLIDWORKS<sup>®</sup> 2017 para convertir rápidamente tus ideas en productos terminados.</h3>
					<p><a class="page-scroll" href="#1"><img src="assets/images/mouse.png" alt=""></a></p>
				</div>
			</div>
			<div class="item item-video">
				<video id="bgvid" playsinline="" autoplay="" muted="" loop="">
					<source src="assets/images/video2.mp4" type="video/mp4">
				</video>
				<div class="carousel-caption">
					<h1>Conoce SOLIDWORKS<sup>®</sup> 2017</h1>
					<h2>The power you need to drive innovation</h2>
					<h3>Descubre el nuevo poder y desempeño de SOLIDWORKS<sup>®</sup> 2017 para convertir rápidamente tus ideas en productos terminados.</h3>
					<p><a class="page-scroll" href="#1"><img src="assets/images/mouse.png" alt=""></a></p>
				</div>
			</div>

			<div class="item item-video">
				<video id="bgvid" playsinline="" autoplay="" muted="" loop="">
					<source src="assets/images/dmd-video.mp4" type="video/mp4">
				</video>
				<div class="carousel-caption">
					<h1>Conoce SOLIDWORKS<sup>®</sup> 2017</h1>
					<h2>The power you need to drive innovation</h2>
					<h3>Descubre el nuevo poder y desempeño de SOLIDWORKS<sup>®</sup> 2017 para convertir rápidamente tus ideas en productos terminados.</h3>
					<p><a class="page-scroll" href="#1"><img src="assets/images/mouse.png" alt=""></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="first container" id="1">
	<h1>Novedades de Solidworks<sup>®</sup> 2017</h1>
	<h2>Gracias a la mayor potencia y rendimiento del núcleo y las nuevas funciones para tecnologías emergentes, <strong>nunca ha sido tan fácil diseñar y crear con SOLIDWORKS<sup>®</sup></strong>, la solución de diseño y desarrollo preferida por más de 3,3 millones de usuarios de todo el mundo. A continuación se muestran algunas de las nuevas características principales que le ayudarán a mejorar su flujo de trabajo.</h2>
</section>

<section class="eventos">
	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_09.jpg" alt="">
			<h3>Calendario de eventos</h3>
			<p>Vive la Experiencia DMD en Cinépolis y descubre las novedades que SOLIDWORKS tiene para ti.</p>
			<a class="vermas" href="calendar.php">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>	

	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_11.jpg" alt="">
			<h3>Top 10 Novedades</h3>
			<p>Gracias a una mayor potencia y rendimiento, SOLIDWORKS te permite diseñar y crear tus proyectos de una forma más productiva e intuitiva.</p>
			<a class="vermas" href="novedades.php">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>	

	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_13.jpg" alt="">
			<h3>Recorrido por el portafolio de soluciones</h3>
			<p>Entra a nustro portafolio y solicita una demostración.</p>
			<a class="vermas" href="portafolio.php">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>	

	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_18.jpg" alt="">
			<h3>SOLIDWORKS<sup>®</sup> en la actualidad</h3>
			<p>Descubre como DMD y SOLIDWORKS han ayudado a grandes empresas a superar desafíos extremos y obtener el mejor retorno de inversión.</p>
			<a class="vermas" href="actualidad">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>	

	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_20.jpg" alt="">
			<h3>Descargas</h3>
			<p>Obtén contenido de SOLIDWORKS 2017 con tan solo un clic.</p>
			<a class="vermas" href="descargas.php">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>	

	<article class="object object-type-line column">
		<?php if(!$user): ?>
		<button type="button" class="object-hover" data-toggle="modal" data-target="#registroModal">
			Ver más <i class="glyph-icon flaticon-signs"></i>
		</button>
		<?php endif; ?>
		<div class="object-content">	
			<img src="assets/images/dmd_22.jpg" alt="">
			<h3>Casos de éxito</h3>
			<p>Descubre como DMD y SOLIDWORKS han ayudado a grandes empresas a superar desafíos extremos y obtener el mejor retorno de inversión.</p>
			<a class="vermas" href="casos-exito.php">Ver Más <i class="material-icons">keyboard_arrow_right</i></a>
		</div>
	</article>

</section>

<?php include('footer.php'); ?>