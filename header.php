<?php 
include_once ("assets.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $page_title ?></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script>
		var redirect_to = "";
		var logged = false;
	</script>
</head>
<body>

	<!--Contacto-->
	<section class="stickycontact floating-form inactive" id="contact_form">
		<a class="contact-opener" href="#">Contacto <i class="material-icons">email</i></a>
		<div id="contact_body" class="contact-body">
			<h3 class="h3none">Ponte en contacto con DMD</h3>
			<form action="" method="post" id="contact-form">
			  <div class="form-group">
				<input type="text" class="form-control" id="fullname" name="fullname" placeholder="*Nombre Completo" value="<?php echo ($user !== false) ? $user['firstname'].' '.$user['lastname'] : '' ?>">
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="company" name="company" placeholder="*Empresa" value="<?php echo ($user !== false) ? $user['company'] : '' ?>">
			  </div>

			  <div class="form-group">
				<input type="Nombre" class="form-control" id="phone" name="phone" placeholder="*Teléfono" value="<?php echo ($user !== false) ? $user['phone'] : '' ?>">
			  </div>

			  <div class="form-group">
				<input type="text" class="form-control" id="email" name="email" placeholder="*E-mail" value="<?php echo ($user !== false) ? $user['email'] : '' ?>">
			  </div>
			  <textarea class="form-control" rows="5" placeholder="*Mensaje" id="message" name="message"></textarea>
			  <input type="hidden" name="action" value="contactForm">
			  <button type="submit" class="btn btn-default" id="contact_submit">Enviar</button>
			</form>
		</div>
	</section>

	<!--Modal Iniciar sesión-->
	<div class="modal fade bs-example-modal-sm" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close close2 col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title col-xs-7" id="myModalLabel">Inicia Sesión</h4>
					<p class="col-xs-2 col-sm-2"><a href="javascript:void(0)" id="showRegistroModal">Regístrate</a></p>
				</div>
				<div class="modal-body">
					<form action="" method="post" id="signin-form">
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="*Correo electrónico">
						</div>
						<div class="form-group col-sm-12">
							<input type="password" class="form-control" id="password" name="password" placeholder="*Contraseña">
						</div>
						<!-- <div class="checkbox col-sm-12">
							<label><input type="checkbox" class="input-checkbox"> Mantener la sesión iniciada</a></label>
						</div> -->
						<input type="hidden" name="action" value="signIn">
						<button type="submit" class="btn btn-default" id="login_submit">Iniciar Sesión</button>
					</form>

					<a class="contrasena" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						¿Has olvidado tu contraseña?<br>
					</a>
					<div class="collapse" id="collapseExample">
						<div class="well">
							<form action="" method="post" id="password-recovery">
								<div class="form-group col-sm-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="*Email">
									<input type="hidden" name="action" value="recoveryPassword">
								</div>
								<button type="submit" class="btn btn-default" id="password_recovery_submit">Recuperar contraseña</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Registro -->
	<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close col-sm-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title col-xs-5 col-sm-5" id="registroModalLabel">Regístrate</h4>
					<p class="col-xs-6 col-sm-6"><a href="javascript:void(0)" id="showLoginModal">¿Ya tienes una cuenta?</a></p>
				</div>
				<div class="modal-body">
					<form action="" method="post" id="signup-form">
						<div class="form-group col-sm-12">
							Regístrate aquí para poder acceder a todo nuestro contenido.
						</div>

						<div class="form-group col-sm-6">
							<input type="email" class="form-control" name="email" id="email" placeholder="*Email">
						</div>
						
						<div class="form-group col-sm-6">
							<input type="password" class="form-control" name="password" id="password" placeholder="*Password">
						</div>

						<div class="form-group col-sm-6">
							<input type="Nombre" class="form-control" name="first_name" id="first_name" placeholder="*Nombre">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="last_name" id="last_name" placeholder="*Apellido">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="job_title" id="job_title" placeholder="*Puesto">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="company" id="company" placeholder="*Compañia">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="*Teléfono">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="address" id="address" placeholder="*Dirección">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="city" id="city" placeholder="*Ciudad">
						</div>

						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="*Codigo Postal">
						</div>

						<div class="form-group col-sm-12">
							<select class="form-control col-sm-12" id="state" name="state">
								<option value="" selected="selected">Estado</option>
								<option value="Aguascalientes">Aguascalientes</option>
								<option value="Baja California">Baja California</option>
								<option value="Baja California Sur">Baja California Sur</option>
								<option value="Campeche">Campeche</option>
								<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
								<option value="Colima">Colima</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Durango">Durango</option>
								<option value="Guanajuato">Guanajuato</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Hidalgo">Hidalgo</option>
								<option value="Jalisco">Jalisco</option>
								<option value="México">México</option>
								<option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
								<option value="Morelos">Morelos</option>
								<option value="Nayarit">Nayarit</option>
								<option value="Nuevo León">Nuevo León</option>
								<option value="Oaxaca">Oaxaca</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Querétaro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potosí</option>
								<option value="Sinaloa">Sinaloa</option>
								<option value="Sonora">Sonora</option>
								<option value="Tabasco">Tabasco</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Tlaxcala">Tlaxcala</option>
								<option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
								<option value="Yucatán">Yucatán</option>
								<option value="Zacatecas">Zacatecas</option>
								<option value="Fuera de MX">Fuera de MX</option>
							</select>
						</div>

						<div class="checkbox col-sm-12">
							<label>
								<input type="checkbox" class="input-checkbox" id="tyc" name="tyc"> To continue, you must agree to receive communications according to the Dassault Systèmes SolidWorks Corporation <a href="http://www.solidworks.com/sw/privacypolicy.htm" target="_blank">Aviso de privacidad</a>
							</label>
						</div>
						<input type="hidden" name="action" value="signUp">
						<button type="submit" class="btn btn-default" id="signup_submit">Enviar</button>
					</form>
				</div>		
			</div>
		</div>
	</div>

	<header class="clearMargin">
		<section class="up-top">
			<div class="contacto-top">
				<p>
					<i class="glyph-icon flaticon-technology"></i><span>Ventas <br></span><a href="tel:018008909038">01 800 890 90 38</a>
				</p>
				<p>
					<i class="glyph-icon flaticon-business"></i><span>Soporte <br></span><a href="tel:018003634357">01 800 363 43 57</a>
				</p>
				<p>
					<i class="glyph-icon flaticon-people"></i><span><strong>
					<?php if($user): ?>
					<a href="javascript:void(0)" id="logOut">Cerrar<br> Sesión</a></strong></span>
					<?php else: ?>
					<a href="" data-toggle="modal" data-target="#logInModal">Inicia<br> Sesión</a></strong></span>
					<?php endif; ?>
				</p>
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

				<?php if($user): ?>
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
				<?php endif; ?>
			</article>
		</section>
	</header>
