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
	<a class="contact-opener" href="#">Contacto <i class="material-icons">email</i></a>
    
    <div id="contact_body" class="contact-body">
    	<h3>Ponte en contacto con Dmd</h3>
        <form>
		  <div class="form-group">
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="*Nombre Completo">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*Empresa">
		  </div>

		  <div class="form-group">
		    <input type="Nombre" class="form-control" id="exampleInputTeléfono" placeholder="*Teléfono">
		  </div>

		  <div class="form-group">
		    <input type="text" class="form-control" id="exampleInputApellido1" placeholder="*E-mail">
		  </div>
		  <textarea class="form-control" rows="5" placeholder="*Mensaje"></textarea>
		  <button type="submit" class="btn btn-default">Enviar</button>
		  
		</form>
    </div>
</section>

<!--ModalInICIAR SESION-->
<div class="modal fade bs-example-modal-sm" id="inicio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close2 col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title col-xs-11" id="myModalLabel">Inicia Sesión</h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group col-sm-12">
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="*Usuario">
		  </div>
		  <div class="form-group col-sm-12">
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*Password">
		  </div>
		  <div class="checkbox col-sm-12">
		    <label>
		      <input type="checkbox" class="input-checkbox"> Mantener la sesión iniciada</a></label>
		  </div>
		 
		  <button type="submit" class="btn btn-default">Iniciar Sesión</button>
		</form>
			
		<a class="contrasena" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  		¿Has olvidado tu contraseña?<br>
		</a>
		<div class="collapse" id="collapseExample">
			<div class="well">
		  	<form>
		     <div class="form-group col-sm-12">
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="*Email">
	  		</div>
	  		</form>
	  		</div>
		</div>
      </div>
     
    </div>
  </div>
</div>



<header class="clearMargin">
	<section class="up-top">
		<div class="contacto-top">
		<p><i class="glyph-icon flaticon-technology"></i><span>Ventas <br></span><a href="">01 800 890 90 38</a></p>
		<p><i class="glyph-icon flaticon-business"></i><span>Soporte <br></span><a href="">01 800 363 43 57</a></p>
		<p><i class="glyph-icon flaticon-people"></i><span><strong>
			<a href="" data-toggle="modal" data-target="#inicio">Inicia<br> Sesión</a></strong></span></p>
		</div>
	</section>

	<section class="nav-logo container-fluid">
		<article>
		  <div class="col-xs-6 col-sm-3">
		  	<a href="index.php">
		  			    <img src="assets/images/dmd.png" alt="">
		    </a> 
		  </div>

		  <div class="col-sm-6 topfrase">
		  	<h1>¡Lanzamiento <br><span>SOLIDWORKS<sup>®</sup> 2017!</span></h1>
		  </div>

		  <div class="social-header col-xs-6 col-sm-3">
		  	<a href="https://www.facebook.com/dmdcommx?fref=ts&__mref=message_bubble" target="_blank" ><i class="flaticon-social-media-2"></i></a>
		  	<a href=""><i class="flaticon-social"></i></a>

		  </div>

		  <div class="button_container" id="toggle">
		    <span class="top"></span>
		    <span class="middle"></span>
		    <span class="bottom"></span>
		  </div>

		  <div class="overlay" id="overlay">
		    <nav class="overlay-menu">
		      <ul>
		        <li><a href="calendar.php">Calendario de eventos</a></li>
		        <li><a href="novedades.php">Top 10 novedades</a></li>
		        <li><a href="portafolio.php">Recorrido por el portafolio de soluciones</a></li>
		        <li><a href="actualidad.php"> SOLIDWORKS® en la actualidad</a></li>
		        <li><a href="descargas.php">Descargas</a></li>
		        <li><a href="casos-exito.php">Casos de éxito</a></li>
		      </ul>
		    </nav>
		  </div>
		  </article>
	  </section>
</header>
