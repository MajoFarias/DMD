<?php 
require_once("Request.class.php");

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
	if (function_exists($_REQUEST['action'])) {
		$_REQUEST['action']();
	}
	else{
		exit("error");
	}
}

function registerRequest(){
	if (isset($_POST['name']) && !empty($_POST['name'])) {
		if (session_status() == PHP_SESSION_NONE)
			session_start();
		$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;

		if(!$user)
			exit(json_encode(array('status' => 'error', 'message' => 'Debe iniciar sesión primero.')));

		$request = new Request();

		$request->name = $_POST['name'];
		$request->user_id = $user['id'];
		$r = $request->create();
		if($r == 1){
			sendMessage($user, $_POST['name']);
			exit(json_encode(array('status' => 'success')));
		}
		else{
			exit(json_encode(array('status' => 'error', 'message' => 'Hubo un problema al registrar la información, intente más tarde')));
		}
	}
	else{
		exit(json_encode(array('status' => 'error', 'message' => 'Petición no válida')));
	}
}

function sendMessage($user, $request){
	date_default_timezone_set('America/Mexico_City');
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$html = '
	<html>
	<head>
	<title>Envío de notificación.</title>
	</head>
	<body>
	<p>Una persona está interesada en: <strong>'.$request.'</strong></p>
	<table width="500">
	<tr>
	<th align="right">Nombre:</th><td>'.$user['firstname'].' '.$user['lastname'].'</td>
	</tr>
	<tr>
	<th align="right">Email:</th><td>'.$user['email'].'</td>
	</tr>
	<tr>
	<th align="right">Teléfono:</th><td>'.$user['phone'].'</td>
	</tr>
	<tr>
	<th align="right">Ciudad:</th><td>'.$user['city'].'</td>
	</tr>
	<tr>
	<th align="right">Estado:</th><td>'.$user['state'].'</td>
	</tr>
	<tr>
	<th align="right">Fecha y hora de la solicitud: </th><td>'.date('d-m-Y H:i:s').'</td>
	</tr>
	</table>
	</body>
	</html>
	';

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "mail.dmd.com.mx";
	$mail->Port = 	465;
	$mail->Username = "contactar@dmd.com.mx";
	$mail->Password = "c0nt4ct4rdmd";
	$mail->CharSet = 'UTF-8';
	$mail->SetFrom("contactar@dmd.com.mx" , "SolidWorks DMD ");
	$mail->Subject = "Solicitud de información";
	$mail->IsHTML(true);
	$mail->Body = $html;
	$mail->addAddress("manuel@publicidadenlinea.com", "Manuel Murillo");

	if($mail->Send()) {
		return true;
	} else {
		return false;
	}
}

function contactForm(){
	if (isset($_POST['fullname'], $_POST['company'], $_POST['phone'], $_POST['email'], $_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		date_default_timezone_set('America/Mexico_City');
		require 'PHPMailer/PHPMailerAutoload.php';
		
		$html = '
		<html>
		<head>
		<title>Envío de notificación.</title>
		</head>
		<body>
		<p>Una persona contactó desde el formulario de la página.</p>
		<table width="500">
		<tr>
		<th align="right">Nombre:</th><td>'.$_POST['fullname'].'</td>
		</tr>
		<tr>
		<th align="right">Empresa:</th><td>'.$_POST['company'].'</td>
		</tr>
		<tr>
		<th align="right">Teléfono:</th><td>'.$_POST['phone'].'</td>
		</tr>
		<tr>
		<th align="right">Email:</th><td>'.$_POST['email'].'</td>
		</tr>
		<tr>
		<th align="right">Mensaje:</th><td>'.$_POST['message'].'</td>
		</tr>
		<tr>
		<th align="right">Fecha y hora de la solicitud: </th><td>'.date('d-m-Y H:i:s').'</td>
		</tr>
		</table>
		</body>
		</html>
		';

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "mail.dmd.com.mx";
		$mail->Port = 	465;
		$mail->Username = "contactar@dmd.com.mx";
		$mail->Password = "c0nt4ct4rdmd";
		$mail->CharSet = 'UTF-8';
		$mail->SetFrom("contactar@dmd.com.mx" , "SolidWorks DMD ");
		$mail->Subject = "Formulario de Contacto - DMD";
		$mail->IsHTML(true);
		$mail->Body = $html;
		$mail->addAddress("manuel@publicidadenlinea.com", "Manuel Murillo");

		if($mail->Send()) {
			exit(json_encode(array('status' => 'success')));
		} else {
			exit(json_encode(array('status' => 'error', 'message' => 'Hubo un problema al enviar tu petición, intenta más tarde.')));
		}
	}
	else{
		exit(json_encode(array('status' => 'error', 'message' => 'Datos faltantes o incorrectos.')));
	}
}

?>