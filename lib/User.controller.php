<?php 
require_once("User.class.php");

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
	if (function_exists($_REQUEST['action'])) {
		$_REQUEST['action']();
	}
	else{
		exit("error");
	}
}

function signUp(){
	if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$user = new User();
		$user->email = $_POST['email'];
		$exists = $user->search();

		if(empty($exists)){
			$user->email = $_POST['email'];
			$user->password = md5($_POST['password']);
			$user->firstname = $_POST['first_name'];
			$user->lastname = $_POST['last_name'];
			$user->jobtitle = $_POST['job_title'];
			$user->company = $_POST['company'];
			$user->phone = $_POST['phone'];
			$user->address = $_POST['address'];
			$user->city = $_POST['city'];
			$user->zipcode = $_POST['zip_code'];
			$user->state = $_POST['state'];
			$r = $user->create();
			if($r == 1){
				$u = new User();
				$u->email =  $_POST['email'];
				$us = $u->search();
				if(!empty($us)){
					if (session_status() == PHP_SESSION_NONE) {
						session_start();
					}
					$signIn['id'] = $us[0]['id'];
					$signIn['email'] = $us[0]['email'];
					$signIn['firstname'] = $us[0]['firstname'];
					$signIn['lastname'] = $us[0]['lastname'];
					$signIn['jobtitle'] = $us[0]['jobtitle'];
					$signIn['company'] = $us[0]['company'];
					$signIn['phone'] = $us[0]['phone'];
					$signIn['address'] = $us[0]['address'];
					$signIn['city'] = $us[0]['city'];
					$signIn['zipcode'] = $us[0]['zipcode'];
					$signIn['state'] = $us[0]['state'];
					$_SESSION['user'] = $signIn;
				}
				exit(json_encode(array('status' => 'success')));
			}
			else{
				exit(json_encode(array('status' => 'error', 'message' => 'Hubo un problema al registrar la información, intente más tarde')));
			}
		}
		else{
			exit(json_encode(array('status' => 'error', 'message' => 'El email ya se encuentra registrado')));
		}
	}
	else{
		exit(json_encode(array('status' => 'error', 'message' => 'Email no válido')));
	}
}

function signIn (){
	if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && isset($_POST['password']) && !empty($_POST['password'])) {
		$user = new User();
		$user->email = $_POST['email'];
		$user->password = md5($_POST['password']);
		$exists = $user->search();

		if(!empty($exists)){
			$signIn['id'] = $exists[0]['id'];
			$signIn['email'] = $exists[0]['email'];
			$signIn['firstname'] = $exists[0]['firstname'];
			$signIn['lastname'] = $exists[0]['lastname'];
			$signIn['jobtitle'] = $exists[0]['jobtitle'];
			$signIn['company'] = $exists[0]['company'];
			$signIn['phone'] = $exists[0]['phone'];
			$signIn['address'] = $exists[0]['address'];
			$signIn['city'] = $exists[0]['city'];
			$signIn['zipcode'] = $exists[0]['zipcode'];
			$signIn['state'] = $exists[0]['state'];
			if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
			$_SESSION['user'] = $signIn;
			exit(json_encode(array('status' => 'success')));
		}
		else{
			exit(json_encode(array('status' => 'error', 'message' => 'Email o contraseña incorrectos')));
		}
	}
	else{
		exit(json_encode(array('status' => 'error', 'message' => 'Revise la información enviada')));
	}
}

function logOut (){
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	unset($_SESSION["user"]);
	session_destroy();
	exit(json_encode("success"));
}

function recoveryPassword (){
	if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$user = new User();
		$user->email = $_POST['email'];
		$exists = $user->search();

		if(!empty($exists)){
			$email = $exists[0]['email'];
			$id = $exists[0]['id'];
			$new_password = generateRandomString(8);
			$hash_password = md5($new_password);
			$fullname = $exists[0]['firstname']." ".$exists[0]['lastname'];

			$user->id =  $exists[0]['id'];
			$user->password = $hash_password;
			if($user->save() !== null){
				sendNewPassword($email, $fullname, $new_password);
				exit(json_encode(array('status' => 'success')));
			}
			else{
				exit(json_encode(array('status' => 'error', 'message' => 'Ha ocurrido un error, intente más tarde')));
			}
		}
		else{
			exit(json_encode(array('status' => 'error', 'message' => 'El email no está registrado en nuestro sistema')));
		}
	}
	else{
		exit(json_encode(array('status' => 'error', 'message' => 'El email es incorrecto')));
	}
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendNewPassword($to_email, $to_name, $password){ 
	date_default_timezone_set('America/Mexico_City');
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$html = '
	<html>
	<head>
	<title>Recuperación de contraseña.</title>
	</head>
	<body>
	<p>Estimado(a) '.$to_name.': ha solicitado recientemente la recuperación de su contraseña.</p>
	<p>Le enviamos sus datos de acceso para nuestro portal:</p>
	<table width="500">
	<tr>
	<th align="right">Email:</th><td>'.$to_email.'</td>
	</tr>
	<tr>
	<th align="right">Contraseña:</th><td>'.$password.'</td>
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
	$mail->Subject = "Recuperación de contraseña";
	$mail->IsHTML(true);
	$mail->Body = $html;
	$mail->addAddress($to_email, $to_name);

	if($mail->Send()) {
		return true;
	} else {
		return false;
	}
}

?>