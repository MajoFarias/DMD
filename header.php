<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>DMD</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>


<!--Contacto-->
<section class="stickycontact floating-form inactive" id="contact_form">
	<a class="contact-opener" href="#">Open Contact Form</a>
    
    <div id="contact_body" class="contact-body">
        <form>
		  <div class="form-group col-sm-12">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre Completo*">
		  </div>
		  <div class="form-group col-sm-12">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Empresa">
		  </div>

		  <div class="form-group col-sm-12">
		    <label for="exampleInputEmail1">Nombre</label>
		    <input type="Nombre" class="form-control" id="exampleInputNombre1" placeholder="Teléfono">
		  </div>

		  <div class="form-group col-sm-12">
		    <label for="exampleInputEmail1">Apellido</label>
		    <input type="text" class="form-control" id="exampleInputApellido1" placeholder="Email">
		  </div>
		  <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
		  
		</form>
    </div>
</section>



<header class="clearMargin">
	<section class="up-top">
		<div class="contacto-top">
		<p><i class="glyph-icon flaticon-technology"></i><span>Ventas</span> 01 800 890 90 38</p>
		<p><i class="glyph-icon flaticon-business"></i><span>Soporte</span> 01 800 363 43 57</p>
		<p><i class="glyph-icon flaticon-people"></i><span><strong><a href="#">Inicia Sesión</a></strong></span></p>
		</div>
	</section>

	<section class="nav-logo container-fluid">
		<article>
		  <div class="col-sm-4">
		    <img src="assets/images/dmd.png" alt="">
		  </div>

		  <div class="col-sm-4">
		  	<h1>¡Lanzamiento<br><span>SOLIDWORKS<sup>®</sup> 2017!</span></h1>
		  </div>
		  <div class="col-sm-4">
		  	<i></i>
		  </div>

		  <div class="button_container" id="toggle">
		    <span class="top"></span>
		    <span class="middle"></span>
		    <span class="bottom"></span>
		  </div>

		  <div class="overlay" id="overlay">
		    <nav class="overlay-menu">
		      <ul>
		        <li><a data-toggle="modal" href="#myModal">Calendario de eventos</a></li>
		        <li><a data-toggle="modal" href="#myModal">Top 10 novedades</a></li>
		        <li><a data-toggle="modal" href="#myModal">Recorrido por el portafolio de soluciones</a></li>
		        <li><a data-toggle="modal" href="#myModal">SOLIDWORKS® en la actualidad</a></li>
		        <li><a data-toggle="modal" href="#myModal">Descargas</a></li>
		        <li><a href="casosdeexito.html" class="clock">Casos de éxito</a></li>
		      </ul>
		    </nav>
		  </div>
		  </article>
	  </section>
</header>