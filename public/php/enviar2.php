<?php
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');

//Recibir todos los parámetros del formulario
$name = $_POST['name'];
$dni = $_POST['dni'];
$email = $_POST['correo'];
$university = $_POST['university'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// $archivo2 = $_FILES['ensayo'];
$archivo = $_FILES['carnet'];


//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

//Nuestra cuenta
$mail->Username ='cdm.inscripciones@gmail.com';
$mail->Password = "koritos2018";

//Agregar destinatario
$mail->AddAddress("ensayos@cdmperu.org");
$mail->Subject = "ensayos";
$mail->Body = "Nombre: $name \n".
    "DNI: $dni \n".
    "Email: $email \n".
    "Universidad: $university \n".
    "Telefono: $phone \n".
    "Mensaje: $message \n";
//Para adjuntar archivo
$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
$mail->AddAttachment($archivo2['tmp_name'], $archivo2['name']);



//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
	echo'<script type="text/javascript">
			alert("Enviado Correctamente");
		 </script>';
}
else{
	echo'<script type="text/javascript">
			alert("NO ENVIADO, intentar de nuevo");
		 </script>';
}
?>

